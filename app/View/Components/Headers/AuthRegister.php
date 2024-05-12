<?php

namespace App\View\Components\Headers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthRegister extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.headers.auth-register');
    }
}
