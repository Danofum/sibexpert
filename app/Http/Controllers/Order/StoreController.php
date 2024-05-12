<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $orderData = $request->validated();

        $redirect = redirect()->back();

        $user = auth()->user();
        if ($user->orders()->create($orderData))
            return $redirect;

        return $redirect->withErrors(['first_name' => 'Что то пошло не так']);
    }
}
