<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackageService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201711\\ObjectValue',
      'ActivateProductPackages' => 'Google\\AdsApi\\AdManager\\v201711\\ActivateProductPackages',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201711\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201711\\ApplicationException',
      'ArchiveProductPackages' => 'Google\\AdsApi\\AdManager\\v201711\\ArchiveProductPackages',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201711\\AuthenticationError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201711\\BaseCustomFieldValue',
      'BaseRateError' => 'Google\\AdsApi\\AdManager\\v201711\\BaseRateError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201711\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201711\\CustomFieldValue',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'DeactivateProductPackages' => 'Google\\AdsApi\\AdManager\\v201711\\DeactivateProductPackages',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201711\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201711\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201711\\PermissionError',
      'ProductPackageAction' => 'Google\\AdsApi\\AdManager\\v201711\\ProductPackageAction',
      'ProductPackageActionError' => 'Google\\AdsApi\\AdManager\\v201711\\ProductPackageActionError',
      'ProductPackage' => 'Google\\AdsApi\\AdManager\\v201711\\ProductPackage',
      'ProductPackageItemError' => 'Google\\AdsApi\\AdManager\\v201711\\ProductPackageItemError',
      'ProductPackagePage' => 'Google\\AdsApi\\AdManager\\v201711\\ProductPackagePage',
      'ProductPackageRateCardAssociationError' => 'Google\\AdsApi\\AdManager\\v201711\\ProductPackageRateCardAssociationError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201711\\RangeError',
      'RateCardError' => 'Google\\AdsApi\\AdManager\\v201711\\RateCardError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201711\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201711\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201711\\TextValue',
      'UnarchiveProductPackages' => 'Google\\AdsApi\\AdManager\\v201711\\UnarchiveProductPackages',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201711\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201711\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'createProductPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201711\\createProductPackagesResponse',
      'getProductPackagesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getProductPackagesByStatementResponse',
      'performProductPackageActionResponse' => 'Google\\AdsApi\\AdManager\\v201711\\performProductPackageActionResponse',
      'updateProductPackagesResponse' => 'Google\\AdsApi\\AdManager\\v201711\\updateProductPackagesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ProductPackageService?wsdl')
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
     * Creates new {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\AdManager\v201711\ProductPackage[] $productPackages
     * @return \Google\AdsApi\AdManager\v201711\ProductPackage[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function createProductPackages(array $productPackages)
    {
      return $this->__soapCall('createProductPackages', array(array('productPackages' => $productPackages)))->getRval();
    }

    /**
     * Gets a {@link ProductPackagePage} of {@link ProductPackage} objects
     * that satisfy the filtering criteria specified by given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProductPackage#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProductPackage#name}</td>
     * </tr>
     * <tr>
     * <td>{@code notes}</td>
     * <td>{@link ProductPackage#notes}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ProductPackage#status}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link ProductPackage#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProductPackage#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * filtering criteria over product packages
     *
     * @param \Google\AdsApi\AdManager\v201711\Statement $statement
     * @return \Google\AdsApi\AdManager\v201711\ProductPackagePage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getProductPackagesByStatement(\Google\AdsApi\AdManager\v201711\Statement $statement)
    {
      return $this->__soapCall('getProductPackagesByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link ProductPackage} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v201711\ProductPackageAction $action
     * @param \Google\AdsApi\AdManager\v201711\Statement $statement
     * @return \Google\AdsApi\AdManager\v201711\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function performProductPackageAction(\Google\AdsApi\AdManager\v201711\ProductPackageAction $action, \Google\AdsApi\AdManager\v201711\Statement $statement)
    {
      return $this->__soapCall('performProductPackageAction', array(array('action' => $action, 'statement' => $statement)))->getRval();
    }

    /**
     * Updates the specified {@link ProductPackage} objects.
     *
     * @param \Google\AdsApi\AdManager\v201711\ProductPackage[] $productPackages
     * @return \Google\AdsApi\AdManager\v201711\ProductPackage[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function updateProductPackages(array $productPackages)
    {
      return $this->__soapCall('updateProductPackages', array(array('productPackages' => $productPackages)))->getRval();
    }

}
