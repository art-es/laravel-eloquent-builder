<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return Application
     */
    public function createApplication(): Application
    {
        $app = new Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
