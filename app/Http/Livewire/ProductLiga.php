<?php

namespace App\Http\Livewire;

use App\Apparel;
use App\Product;
use Livewire\Component;

class ProductLiga extends Component
{
    public $search, $apparel;

    protected $updateQueryString = ['search'];

    public function mount($apparelId)
    {
        $apparelDetail = Apparel::find($apparelId);

        if ($apparelDetail) {
            $this->apparel = $apparelDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('apparel_id', $this->apparel->id)->where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::where('apparel_id', $this->apparel->id)->paginate(8);
        }
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'Apparel' . $this->apparel->nama
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
