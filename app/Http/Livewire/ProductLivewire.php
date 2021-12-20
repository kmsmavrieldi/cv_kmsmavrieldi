<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductLivewire extends Component
{
    public $idProduct, $name, $qty, $price;
    // public $createMode = false;


    public function render()
    {   
        return view('livewire.product-livewire',[
            'products' => Product::all()
        ])
        ->extends('layouts.main')
        ->section('main');
    }

    public function create()
    {
        $this->name ='';
        $this->qty  ='';
        $this->price=''; 
    }

    public function store()
    {
        $this->validate([
            'name'  => 'required|min:3|max:100|unique:products',
            'qty'   => 'min:1|max:7', 
            'price' => 'required|numeric|min:3'
        ]);
        Product::create([
            'name'  =>$this->name,
            'qty'   =>$this->qty,
            'price' =>$this->price
        ]);
                
        $this->name ='';
        $this->qty  ='';
        $this->price='';
        session()->flash('message','Data Anda telah berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $this->idProduct        = $id;
        $this->name             = $product->name;
        $this->qty              = $product->qty; 
        $this->price            = $product->price;
    }
    public function update()
    {
        $id = $this->idProduct;
        $this->validate([
            'name'  => 'required|min:3|max:100|unique:products,name,'.$id,
            'qty'   => 'min:1|max:7', 
            'price' => 'required|numeric|min:3'
        ]);
        
        Product::find($id)
                ->update([
                'name'  =>$this->name,
                'qty'   =>$this->qty,
                'price' =>$this->price
                ]);
                
        $this->name ='';
        $this->qty  ='';
        $this->price='';
        session()->flash('message','Data anda telah berhasil diupdate');
    }

    public function delete($id)
    {
        Product::find($id)
                 ->delete();
    }
}
