<?php

namespace Workflowable\Form\Contracts;

interface SelectContract
{
    /**
     * Defines the options for a select field
     *
     * @return $this
     */
    public function options(array $options): SelectContract;
}
