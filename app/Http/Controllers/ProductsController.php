<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProductsController extends Controller
{

    public function index() {

        $title = 'First Laravel Project';
    
        return view('products.index', [
            'data' => $data
        ]);
    }
    
    public function about() {
        return 'About Us Page';
    }

    public function show($name) {

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist.'
        ]);
    }
}


