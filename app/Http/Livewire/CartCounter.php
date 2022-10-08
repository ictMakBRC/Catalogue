<?php

namespace App\Http\Livewire;

use App\Models\cart;
use Livewire\Component;

class CartCounter extends Component
{
    public function render()
    {
        if (session()->has('guestuser')) {
            $guest = session()->get('guestuser');
            $cartcount = cart::where('session_id', $guest)->count();
        } else {
            session(['guestuser' => time().rand(50, 1000)]);
            $guest = session()->get('guestuser');
            $cartcount = cart::where('session_id', $guest)->count();
        }

        return view('livewire.cart-counter', compact('cartcount'));
    }
}
