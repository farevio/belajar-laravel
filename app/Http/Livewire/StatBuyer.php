<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class StatBuyer extends Component
{
    public function render()
    {
        return view('livewire.stat-buyer')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
