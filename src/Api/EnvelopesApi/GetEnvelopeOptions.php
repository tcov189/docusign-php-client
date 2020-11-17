<?php

namespace DocuSign\eSign\Api\EnvelopesApi;

class GetEnvelopeOptions
{
    /**
      * $advanced_update When true, envelope information can be added or modified.
      * @var string
      */
    protected $advanced_update;

    /**
     * Gets advanced_update
     * @return string
     */
    public function getAdvancedUpdate()
    {
        return $this->advanced_update;
    }

    /**
     * Sets advanced_update
     * @param string $advanced_update When true, envelope information can be added or modified.
     * @return $this
     */
    public function setAdvancedUpdate($advanced_update)
    {
        $this->advanced_update = $advanced_update;
        return $this;
    }
    /**
      * $include
      * @var string
      */
    protected $include;

    /**
     * Gets include
     * @return string
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets include
     * @param string $include
     * @return $this
     */
    public function setInclude($include)
    {
        $this->include = $include;
        return $this;
    }
}