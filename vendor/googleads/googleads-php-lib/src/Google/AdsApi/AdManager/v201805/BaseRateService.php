<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BaseRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'BaseRateAction' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRateAction',
      'BaseRateActionError' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRateActionError',
      'BaseRate' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRate',
      'BaseRateError' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRateError',
      'BaseRatePage' => 'Google\\AdsApi\\AdManager\\v201805\\BaseRatePage',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DeleteBaseRates' => 'Google\\AdsApi\\AdManager\\v201805\\DeleteBaseRates',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201805\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'ProductBaseRate' => 'Google\\AdsApi\\AdManager\\v201805\\ProductBaseRate',
      'ProductPackageItemBaseRate' => 'Google\\AdsApi\\AdManager\\v201805\\ProductPackageItemBaseRate',
      'ProductTemplateBaseRate' => 'Google\\AdsApi\\AdManager\\v201805\\ProductTemplateBaseRate',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201805\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'UnknownBaseRate' => 'Google\\AdsApi\\AdManager\\v201805\\UnknownBaseRate',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'createBaseRatesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\createBaseRatesResponse',
      'getBaseRatesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getBaseRatesByStatementResponse',
      'performBaseRateActionResponse' => 'Google\\AdsApi\\AdManager\\v201805\\performBaseRateActionResponse',
      'updateBaseRatesResponse' => 'Google\\AdsApi\\AdManager\\v201805\\updateBaseRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/BaseRateService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates a list of new {@link BaseRate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\BaseRate[] $baseRates
     * @return \Google\AdsApi\AdManager\v201805\BaseRate[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function createBaseRates(array $baseRates)
    {
      return $this->__soapCall('createBaseRates', array(array('baseRates' => $baseRates)))->getRval();
    }

    /**
     * Gets a {@link BaseRatePage} of {@link BaseRate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link BaseRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link BaseRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code productTemplateId}</td>
     * <td>{@link ProductTemplateBaseRate#id}<br><b>Note:</b>&nbsp;Cannot be
     * combined with {@code productId}.
     * </tr>
     * <td>{@code productId}</td>
     * <td>{@link ProductBaseRate#id}<br><b>Note:</b>&nbsp;Cannot be combined with
     * {@code productTemplateId}.
     * </tr>
     *
     * a set of base rates.
     *
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\BaseRatePage
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getBaseRatesByStatement(\Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getBaseRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link BaseRate} objects that satisfy the given
     * {@link Statement#query}.
     *
     * a set of base rates.
     *
     * @param \Google\AdsApi\AdManager\v201805\BaseRateAction $baseRateAction
     * @param \Google\AdsApi\AdManager\v201805\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201805\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function performBaseRateAction(\Google\AdsApi\AdManager\v201805\BaseRateAction $baseRateAction, \Google\AdsApi\AdManager\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performBaseRateAction', array(array('baseRateAction' => $baseRateAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link BaseRate} objects.
     *
     * @param \Google\AdsApi\AdManager\v201805\BaseRate[] $baseRates
     * @return \Google\AdsApi\AdManager\v201805\BaseRate[]
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function updateBaseRates(array $baseRates)
    {
      return $this->__soapCall('updateBaseRates', array(array('baseRates' => $baseRates)))->getRval();
    }

}
