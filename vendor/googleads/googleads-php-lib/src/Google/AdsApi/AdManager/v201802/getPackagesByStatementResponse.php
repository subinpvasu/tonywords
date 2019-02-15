<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getPackagesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\PackagePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\PackagePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\PackagePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\PackagePage $rval
     * @return \Google\AdsApi\AdManager\v201802\getPackagesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
