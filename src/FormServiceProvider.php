<?php

namespace Workflowable\Form;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Workflowable\Form\Commands\FormCommand;

class FormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('form')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_form_table')
            ->hasCommand(FormCommand::class);
    }
}
