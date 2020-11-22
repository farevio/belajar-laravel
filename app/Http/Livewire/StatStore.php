<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class StatStore extends Component
{
    public function render()
    {
        return view('livewire.stat-store')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
