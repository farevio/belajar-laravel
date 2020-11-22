<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SuperNavbar extends Component
{
    public function render()
    {
        return view('livewire.super-navbar');
    }
}
