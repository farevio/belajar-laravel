<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class ProductLog extends Component
{
    public function render()
    {
        return view('livewire.product-log')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
