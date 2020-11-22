<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class ProductAdd extends Component
{
    public function render()
    {
        return view('livewire.product-add')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
