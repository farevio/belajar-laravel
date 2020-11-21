<?php

namespace App\Http\Livewire;

use App\Pesanan;
use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $total_harga, $no_hp, $alamat;

    public function mount()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $this->nohp = Auth::user()->nohp;
        $this->alamat = Auth::user()->alamat;

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (!empty($pesanan)) {
            $this->total_harga = $pesanan->total_harga + $pesanan->kode_unik;
        } else {
            return redirect()->route('home');
        }
    }

    public function checkout()
    {
        $this->validate([
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);

        //Simpan no HP dan alamat ke data user
        $user = User::where('id', Auth::user()->id)->first();
        $user->no_hp = $this->no_hp;
        $user->alamat = $this->alamat;
        $user->update();

        //Update data pesanan
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        $this->emit('masukKeranjang');

        session()->flash('message', "Sukses Checkout");

        return redirect()->route('history');
    }

    public function render()
    {
        return view('livewire.checkout')
            ->extends('layouts.app')
            ->section('content');
    }
}
