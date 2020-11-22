<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class ProductAll extends Component
{
    public function render()
    {
        return view('livewire.product-all')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
