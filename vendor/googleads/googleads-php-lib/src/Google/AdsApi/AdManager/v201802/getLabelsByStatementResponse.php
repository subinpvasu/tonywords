<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLabelsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\LabelPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\LabelPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\LabelPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\LabelPage $rval
     * @return \Google\AdsApi\AdManager\v201802\getLabelsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
