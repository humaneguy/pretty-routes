<?php

namespace GabrielFemi\Rootz\Tests\Feature;


use GabrielFemi\Rootz\Tests\TestCase;
use JetBrains\PhpStorm\NoReturn;

class RoutesTest extends TestCase {
    /** @test */
    #[NoReturn] public function welcome_route_returns_ok(): void
    {
       $this->get('hello')->assertOk()->assertSee('Hello');
    }
}