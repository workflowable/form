<?php

namespace Workflowable\Form\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Workflowable\Form\Form
 */
class Form extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Workflowable\Form\Form::class;
    }
}
