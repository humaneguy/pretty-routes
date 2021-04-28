<?php


namespace GabrielFemi\Rootz\Tests;


use GabrielFemi\Rootz\RootzServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [RootzServiceProvider::class];
    }
}