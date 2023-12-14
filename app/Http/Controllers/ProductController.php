<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Product;

class ProductController extends Controller
{
    public function Create()
    {
        $product = Product::create([
            'naam' => 'Arduino',
            'type' => 'Mega',
            'voorraad' => 10
        ]);
        
        $product->Parameter()->attach([1, 2]);

        return $product;
    }

    public function Read()
    {

    }

    public function Update()
    {

    }

    public function Delete()
    {

    }
}
