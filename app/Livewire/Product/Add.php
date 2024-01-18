<?php

namespace App\Livewire\Product;

use Livewire\WithFileUploads;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\Product;
use App\Models\ProductCategories;

class Add extends Component
{
    use WithFileUploads, LivewireAlert;

    public $name, $category_id, $images = [], $description, $product_code, $bar_code, $purchase_price, $selling_price;

    protected $listeners = [
        'images',
        'refreshComponent' => '$refresh',
        'searchUpdated' => 'searchUpdated',
    ];

    public function mount()
    {
    }

    public function getProductCategoriesProperty()
    {
        return ProductCategories::get();
    }

    public function updatedProductName()
    {
        // $this->product_nss = $this->product_name;
    }


    // public function getImageseForInput($value)
    // {
    //     if (!is_null($value))
    //         $this->images = $value;
    // }

    public function hydrate()
    {
        $this->dispatch('select');
    }

    public function render()
    {
        return view('livewire.product.add');
    }
}
