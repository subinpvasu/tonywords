<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationLineItemReportsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\ReconciliationLineItemReportPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\ReconciliationLineItemReportPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ReconciliationLineItemReportPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ReconciliationLineItemReportPage $rval
     * @return \Google\AdsApi\AdManager\v201808\getReconciliationLineItemReportsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
