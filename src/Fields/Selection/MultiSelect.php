<?php

namespace Workflowable\Form\Fields\Selection;

use Illuminate\Support\Traits\Macroable;
use Workflowable\Form\Contracts\SelectContract;

class MultiSelect extends Select implements SelectContract
{
    use Macroable;

    /**
     * Defines the options for a select field
     *
     * @return $this
     */
    public function options(array $options): self
    {
        $this->withMetaData([
            'options' => $options,
        ]);

        return $this;
    }
}
