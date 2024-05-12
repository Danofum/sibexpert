<?php

namespace App\Http\Controllers\Pages\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __invoke(): View
    {
        $user = auth()->user();
        $orders = $user->orders;

        return view('pages.user.profile', compact(['user', 'orders']));
    }
}
