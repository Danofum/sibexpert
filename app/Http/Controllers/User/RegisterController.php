<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $userData = $request->validated();

        $user = User::query()->create($userData);

        $request->session()->regenerate();
        auth()->login($user);

        return redirect()->route('main');
    }
}
