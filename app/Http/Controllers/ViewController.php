<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Produit;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function notrealoe()
    {
        return view('notre-aloe');
    }

    public function faq()
    {
        $faqs = FAQ::all();
        return view('faq.index', compact('faqs'));
    }

    public function products()
    {
        $products = Produit::all();
        return view('products.index', compact('products'));
    }
}

