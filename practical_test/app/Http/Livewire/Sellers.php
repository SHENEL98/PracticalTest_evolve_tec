<?php

namespace App\Http\Livewire;
use App\Models\Seller;

use Livewire\Component;

class Sellers extends Component
{
    public $sellers, $name, $mail,$phone, $seller_id;
    public $updateMode = false;
    
    public function render()
    {
        $this->sellers = Seller::all();
        return view('livewire.sellers');
    }
    private function resetInputFields(){
        $this->name = '';
        $this->mail = '';
        $this->phone = '';

    }
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'mail' => 'required',
            'phone' => 'required|min:11|numeric',
        ]);

        // dd($validatedDate);
        Seller::create($validatedDate);

        session()->flash('message', 'Sellers Created Successfully.');

        $this->resetInputFields();

        $this->emit('sellerStore'); // Close model to using to jquery
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $seller = Seller::where('id',$id)->first();
        $this->seller_id = $id;
        $this->name = $seller->name;
        $this->mail = $seller->mail;
        $this->phone = $seller->phone;

     }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'mail' => 'required',
            'phone' => 'required',

        ]);
        if ($this->seller_id) {
            $seller = Seller::find($this->seller_id);
            $seller->update([
                'name' => $this->name,
                'mail' => $this->mail,
                'phone' => $this->phone,

            ]);
            $this->updateMode = false;
            session()->flash('message', 'Sellers Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if($id){
            Seller::where('id',$id)->delete();
            session()->flash('message', 'Sellers Deleted Successfully.');
        }
    }
}
