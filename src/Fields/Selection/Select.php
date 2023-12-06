<?php

namespace Workflowable\Form\Fields\Selection;

use Illuminate\Support\Traits\Macroable;
use Workflowable\Form\Contracts\SelectContract;
use Workflowable\Form\Fields\Field;

class Select extends Field implements SelectContract
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
