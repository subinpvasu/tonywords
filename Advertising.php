<?php
/*
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  AdWords API integration
 */

namespace adwords;
require_once './Credentials.php';
require_once './vendor/autoload.php';
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Reporting\v201809\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201809\ReportDefinition;
use Google\AdsApi\AdWords\Reporting\v201809\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\Reporting\v201809\ReportDownloader;
use Google\AdsApi\AdWords\ReportSettings;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroup;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201809\cm\AdServingOptimizationStatus;
use Google\AdsApi\AdWords\v201809\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;



use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201809\cm\Budget;
use Google\AdsApi\AdWords\v201809\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201809\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201809\cm\BudgetService;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignLabel;
use Google\AdsApi\AdWords\v201809\cm\CampaignLabelOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201809\cm\CpcBid;
use Google\AdsApi\AdWords\v201809\cm\CriterionType;
use Google\AdsApi\AdWords\v201809\cm\CriterionTypeGroup;

use Google\AdsApi\AdWords\v201809\cm\Criterion;

use Google\AdsApi\AdWords\v201809\cm\DateRange;
use Google\AdsApi\AdWords\v201809\cm\DateTimeRange;
use Google\AdsApi\AdWords\v201809\cm\Draft;
use Google\AdsApi\AdWords\v201809\cm\DraftOperation;
use Google\AdsApi\AdWords\v201809\cm\DraftService;
use Google\AdsApi\AdWords\v201809\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201809\cm\Image;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\Label;
use Google\AdsApi\AdWords\v201809\cm\LabelService;
use Google\AdsApi\AdWords\v201809\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201809\cm\MediaService;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\OrderBy;
use Google\AdsApi\AdWords\v201809\cm\Paging;
use Google\AdsApi\AdWords\v201809\cm\Predicate;
use Google\AdsApi\AdWords\v201809\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201809\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\AdWords\v201809\cm\SortOrder;
use Google\AdsApi\AdWords\v201809\cm\TargetingSetting;
use Google\AdsApi\AdWords\v201809\cm\TargetingSettingDetail;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomer;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomerOperation;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomerService;
use Google\AdsApi\Common\Configuration;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\v201809\DateRangeType;



class Advertising
{
    protected $config;
    protected $managerSession;
    protected $adwordsServices;
    protected $managerCustomerId;
    public $filePath;
    
    const PAGE_LIMIT = 500;

    public function __construct()
    {
        $config = [
            'OAUTH2' => [
                'developerToken' => \Credentials::$DEVELOPER_TOKEN,
                'clientId' => \Credentials::$CLIENT_ID,
                'clientSecret' => \Credentials::$CLIENT_SECRET,
                'refreshToken' => \Credentials::$REFRESH_TOKEN,
            ]
        ];
        $this->config = $config;
        $this->managerCustomerId = \Credentials::$MASTER_ID;
        $this->filePath = sprintf('%s.csv',getcwd().'/shopping_performance_report'); 
    }

    public function createSession($clientCustomerId)
    {
        $config = new Configuration($this->config);

        $builder = new OAuth2TokenBuilder();
        $oAuth2Credential = $builder
            ->from($config)
            ->build();

        $rsb = new ReportSettingsBuilder();
        $rs = $rsb->includeZeroImpressions(true)->build();

        return (new AdWordsSessionBuilder())
            ->from($config)
            ->withOAuth2Credential($oAuth2Credential)
            ->withClientCustomerId($clientCustomerId)
            ->withDeveloperToken($this->config['OAUTH2']['developerToken'])
            ->withReportSettings($rs)
            ->build();
    }
     public function getAdwordsServices()
    {
        if (!$this->adwordsServices) {
            $this->adwordsServices = new AdWordsServices();
        }
        return $this->adwordsServices;
    }
  
  
 
  public function AdowrdsReportDownload(AdWordsSession $session, $start, $end) {
        // Create selector.
        $selector = new Selector();
        $selector->setFields(
            [
                'OfferId','CountryCriteriaId','ProductTypeL1','ProductTypeL2','CampaignId','Clicks','AverageCpc','Conversions','AllConversionRate','AllConversions','ConversionRate','CostPerConversion','Impressions','CostPerAllConversion','AllConversionValue','ConversionValue','ValuePerConversion','ValuePerAllConversion'
            ]
        );
    
    $dateRange = new DateRange();
    $dateRange->setMin(date('Ymd', strtotime($start)));
    $dateRange->setMax(date('Ymd', strtotime($end)));
    $selector->setDateRange($dateRange);
        
      
        $reportDefinition = new ReportDefinition();
        $reportDefinition->setSelector($selector);
        $reportDefinition->setReportName(
            'Shopping performance report '
        );
        $reportDefinition->setDateRangeType(
            ReportDefinitionDateRangeType::CUSTOM_DATE
        );
        $reportDefinition->setReportType(
            ReportDefinitionReportType::SHOPPING_PERFORMANCE_REPORT
        );
        $reportDefinition->setDownloadFormat(DownloadFormat::CSV);
      
        $reportDownloader = new ReportDownloader($session);
        
        $reportSettingsOverride = (new ReportSettingsBuilder())->includeZeroImpressions(false)->build();
        $reportDownloadResult = $reportDownloader->downloadReport(
            $reportDefinition,
            $reportSettingsOverride
        );
        $reportDownloadResult->saveToFile($this->filePath);

        echo '<h2>Report available for downloading <a href="shopping_performance_report.csv">Here...</a></h2><hr/>';
    }
    public function BidUpdate(AdWordsServices $adWordsServices,AdWordsSession $session,$adGroupId,$bidarray) {
        $adGroupCriterionService = $adWordsServices->get($session, AdGroupCriterionService::class);
           
        
        foreach ($bidarray as $id=>$bidz)
        {
            
        $operations = [];
        $adGroupCriterion = new BiddableAdGroupCriterion();
        $adGroupCriterion->setAdGroupId(intval($adGroupId));
        $adGroupCriterion->setCriterion(new Criterion(intval($id)));
        
        $bid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount($bidz*\Credentials::$MULTIPLIER);
        $bid->setBid($money);
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBids([$bid]);
        $adGroupCriterion->setBiddingStrategyConfiguration(
            $biddingStrategyConfiguration
        );       
        
        // Create ad group criterion operation and add it to the list.
        $operation = new AdGroupCriterionOperation();
        $operation->setOperand($adGroupCriterion);
        $operation->setOperator(Operator::SET);
        $operations[] = $operation;
        // Update the keyword on the server.
        
        $adGroupCriterionService->mutate($operations);   
        }
        
    }
}
