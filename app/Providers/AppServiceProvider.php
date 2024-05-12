<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        // Main Layout.
        Blade::component('main-layout', \App\View\Components\Layouts\Main::class);

        // Main Header.
        Blade::component('main-header',\App\View\Components\Headers\Main::class);
        Blade::component('auth-register-header',\App\View\Components\Headers\AuthRegister::class);

        // Main Footer.
        Blade::component('main-footer',\App\View\Components\Footers\Main::class);

        // Form.
        Blade::component('form',\App\View\Components\Forms\Form::class);
    }
}
