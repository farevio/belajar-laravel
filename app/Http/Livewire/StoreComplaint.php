<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class StoreComplaint extends Component
{
    public function render()
    {
        return view('livewire.store-complaint')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
