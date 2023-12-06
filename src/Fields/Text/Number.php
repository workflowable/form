<?php

namespace Workflowable\Form\Fields\Text;

use Illuminate\Support\Traits\Macroable;
use Workflowable\Form\Contracts\NumberContract;

class Number extends Text implements NumberContract
{
    use Macroable;

    protected string $component = 'number-field';

    /**
     * The step value for the number field
     *
     * @return $this
     */
    public function step(float|int $step): self
    {
        $this->withMetaData([
            'step' => $step,
        ]);

        return $this;
    }
}
