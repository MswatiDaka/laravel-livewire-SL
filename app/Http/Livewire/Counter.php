<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $newItem;

    public function render()
    {
        return view('livewire.counter');
    }

    public function addItem()
    {
        dd($this->newItem);
        // $this->validate(['newItem' => 'required|max:255']);
        // $this->newItem='';
    }
    public function remove($itemId)
    {
        dd('removed');
        // $newItem = cart::find($itemId);
        // $newItem->delete();
        session()->flash('message', 'item deleted successfully');
    }
}
