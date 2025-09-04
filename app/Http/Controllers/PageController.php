<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{

    public function index(){
        // fetching data from the api with 5 random breeds
        // $breeds = Http::get('https://dog.ceo/api/breeds/list/random/5')['message'];
        // return view('index',compact('breeds'));

        // $products = Http::get('http://127.0.0.1:8000/api/products')['message'];
        // return view('index',compact('products'));

        $response = Http::get('http://127.0.0.1:8000/api/products');
        $products = $response->json();

        // return view('index',compact('products'));
        return view('index', ['products' => $products['data']]);
    }

    public function showDetail($id)
    {
        $response = Http::get("http://127.0.0.1:8000/api/product/{$id}");

        if ($response->successful()) {
            $product = $response->json();
            return view('showDetail', ['product' => $product]);
        }

        abort(404, 'Product not found');
    }
}
