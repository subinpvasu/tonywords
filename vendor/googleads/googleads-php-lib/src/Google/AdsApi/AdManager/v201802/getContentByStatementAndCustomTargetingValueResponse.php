<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentByStatementAndCustomTargetingValueResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\ContentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\ContentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\ContentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\ContentPage $rval
     * @return \Google\AdsApi\AdManager\v201802\getContentByStatementAndCustomTargetingValueResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
