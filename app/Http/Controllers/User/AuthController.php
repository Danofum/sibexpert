<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AuthRequest;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function __invoke(AuthRequest $request): RedirectResponse
    {
        $userData = $request->validated();

        if (auth()->attempt($userData))
            return redirect()->route('main');

        return redirect()->back()
            ->withErrors(['login' => 'Неверный логин или пароль'])
            ->withInput(['login' => $userData['login']]);
    }
}
