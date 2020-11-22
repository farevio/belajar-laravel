<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class SuperUsr extends Component
{
    public function render()
    {
        return view('livewire.super-usr')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
