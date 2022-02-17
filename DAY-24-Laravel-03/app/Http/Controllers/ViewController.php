<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    private $city;
    private $mobile;
    private $data = [];
    private $ar = [];

    private $products;
    //

    public function index()
    {
//        return "Hello";
        return view('test');
    }

    public function basis()
    {
//        return "<h1>HELLO BASIS</h1>";

        $this->city   = "Dhaka";
        $this->mobile = "0987654321";
        $this->data   = [10, 20, 30, 'BASIS', 12.5, true];
        $this->ar     = [
            0 => [
                'name'   => 'max',
                'city'   => 'london',
                'mobile' => '0987654321',
            ],
            1 => [
                'name'   => 'tom',
                'city'   => 'tokyo',
                'mobile' => '0987654321',
            ],
            3 => [
                'name'   => 'bob',
                'city'   => 'ny',
                'mobile' => '0987654321',
            ],
        ];


        return view('demo', [
            'a' => $this->city,
            'b' => $this->mobile,
            'c' => $this->data,
            'd' => $this->ar,
        ]); // a, b and c index here, variable in demo
    }

    public function about()
    {
        $this->products = Product::getAllProduct();
//        return $this->products;
//        return view('about');
        return view('about', ['products' => $this->products]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($productID)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $productID)
            {
                return view('detail', ['data' => $item]);
            }
        }
    }
}
