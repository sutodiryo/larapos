<?php

namespace App\Livewire\Product;

use Livewire\WithFileUploads;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use WithFileUploads, LivewireAlert;

    public $product_name, $product_nss;

    protected $listeners = [
        'refreshComponent' => '$refresh',
        'searchUpdated' => 'searchUpdated',
    ];

    public function mount()
    {
    }

    public function updatedProductName()
    {
        $this->product_nss = $this->product_name;
    }

    public function render()
    {
        return view('livewire.product.add');
    }
}
