<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'apparels' => Apparel::all()
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
