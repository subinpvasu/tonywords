<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnitUpdateResult
{

    /**
     * @var string[] $newAdUnitIds
     */
    protected $newAdUnitIds = null;

    /**
     * @var int $numChanges
     */
    protected $numChanges = null;

    /**
     * @param string[] $newAdUnitIds
     * @param int $numChanges
     */
    public function __construct(array $newAdUnitIds = null, $numChanges = null)
    {
      $this->newAdUnitIds = $newAdUnitIds;
      $this->numChanges = $numChanges;
    }

    /**
     * @return string[]
     */
    public function getNewAdUnitIds()
    {
      return $this->newAdUnitIds;
    }

    /**
     * @param string[] $newAdUnitIds
     * @return \Google\AdsApi\AdManager\v201808\SuggestedAdUnitUpdateResult
     */
    public function setNewAdUnitIds(array $newAdUnitIds)
    {
      $this->newAdUnitIds = $newAdUnitIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumChanges()
    {
      return $this->numChanges;
    }

    /**
     * @param int $numChanges
     * @return \Google\AdsApi\AdManager\v201808\SuggestedAdUnitUpdateResult
     */
    public function setNumChanges($numChanges)
    {
      $this->numChanges = $numChanges;
      return $this;
    }

}
