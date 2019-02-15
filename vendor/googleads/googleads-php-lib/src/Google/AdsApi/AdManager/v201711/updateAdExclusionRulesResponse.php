<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdExclusionRulesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201711\AdExclusionRule[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201711\AdExclusionRule[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\AdExclusionRule[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\AdExclusionRule[] $rval
     * @return \Google\AdsApi\AdManager\v201711\updateAdExclusionRulesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
