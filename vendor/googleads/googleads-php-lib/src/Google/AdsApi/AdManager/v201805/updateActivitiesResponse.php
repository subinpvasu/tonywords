<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateActivitiesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201805\Activity[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201805\Activity[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\Activity[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\Activity[] $rval
     * @return \Google\AdsApi\AdManager\v201805\updateActivitiesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
