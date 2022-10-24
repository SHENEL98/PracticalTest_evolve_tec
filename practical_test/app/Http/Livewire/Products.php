<?php

namespace App\Http\Livewire;
use App\Models\Seller;
use App\Models\Product;

use Livewire\Component;

class Products extends Component
{
    public $sellerId = 0;

    public $products, $product_name, $price,$qty,$description, $seller_id, $product_id;
    public $updateMode = false;

    public function render()
    {
        // dump($this->sellerId);
        $this->products = Product::where('seller_id',$this->sellerId)->get();

        $seller_id =$this->seller_id;
        return view('livewire.products');
    }
    private function resetInputFields(){
        $this->product_name = '';
        $this->price = '';
        $this->qty = '';
        $this->description = '';


    }
    public function store()
    {
        $validatedDate = $this->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'qty' => 'required|numeric', 

        ]); 
        $product = new Product();

        $product->product_name = $this->product_name;
        $product->price = $this->price;
        $product->qty = $this->qty;
        $product->description = $this->description;
        $product->seller_id = $this->sellerId;


        $product->save();

        // dd($validatedDate);

        session()->flash('message', 'Product Created Successfully.');

        $this->resetInputFields();

        $this->emit('sellerStore'); // Close model to using to jquery
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $product = Product::where('id',$id)->first();
        $this->product_id = $id;
        $this->product_name = $product->product_name;
        $this->price = $product->price;
        $this->qty = $product->qty;
        $this->description = $product->description;


     }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function update()
    {
        $validatedDate = $this->validate([
            'product_name' => 'required',
            'price' => 'required',
            'qty' => 'required',

        ]);
        if ($this->product_id) {
            $product = Product::find($this->product_id);
            $product->update([
                'product_name' => $this->product_name,
                'price' => $this->price,
                'qty' => $this->qty,
                'description' => $this->description,


            ]);
            $this->updateMode = false;
            session()->flash('message', 'Product Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if($id){
            Product::where('id',$id)->delete();
            session()->flash('message', 'Products Deleted Successfully.');
        }
    }
}
