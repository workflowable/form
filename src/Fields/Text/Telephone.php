<?php

namespace Workflowable\Form\Fields\Text;

use Illuminate\Support\Traits\Macroable;
use Workflowable\Form\Contracts\TelephoneContract;

class Telephone extends Text implements TelephoneContract
{
    use Macroable;

    protected string $component = 'telephone-field';
}
