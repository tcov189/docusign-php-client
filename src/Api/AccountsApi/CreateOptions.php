<?php

namespace DocuSign\eSign\Api\AccountsApi;

class CreateOptions
{
    /**
      * $preview_billing_plan When set to **true**, creates the account using a preview billing plan.
      * @var string
      */
    protected $preview_billing_plan;

    /**
     * Gets preview_billing_plan
     * @return string
     */
    public function getPreviewBillingPlan()
    {
        return $this->preview_billing_plan;
    }

    /**
     * Sets preview_billing_plan
     * @param string $preview_billing_plan When set to **true**, creates the account using a preview billing plan.
     * @return $this
     */
    public function setPreviewBillingPlan($preview_billing_plan)
    {
        $this->preview_billing_plan = $preview_billing_plan;
        return $this;
    }
}