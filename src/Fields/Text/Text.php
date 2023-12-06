<?php

namespace Workflowable\Form\Fields\Text;

use Illuminate\Support\Traits\Macroable;
use Workflowable\Form\Contracts\TextContract;
use Workflowable\Form\Fields\Field;

class Text extends Field implements TextContract
{
    use Macroable;

    protected string $component = 'text-field';

    /**
     * The minimum number of characters
     *
     * @return $this
     */
    public function min(int $min): self
    {
        $this->withMetaData([
            'min' => $min,
        ]);

        return $this;
    }

    public function max(int $max): self
    {
        $this->withMetaData([
            'max' => $max,
        ]);

        return $this;
    }

    public function placeholder(string $placeholder): self
    {
        $this->withMetaData([
            'placeholder' => $placeholder,
        ]);

        return $this;
    }
}
