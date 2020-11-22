<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class StoreReview extends Component
{
    public function render()
    {
        return view('livewire.store-review')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
