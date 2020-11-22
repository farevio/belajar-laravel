<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class StoreAdmin extends Component
{
    public function render()
    {
        return view('livewire.store-admin')
            ->extends('layouts.superapp')
            ->section('content');    
    }
}
