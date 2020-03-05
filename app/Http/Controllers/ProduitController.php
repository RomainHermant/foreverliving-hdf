<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Category;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::All(); 
        return view('Produit.index',['produits' => $produits]);
    }

    public function addProduitForm(){
        $categories = Category::all();
        return view('Produit.add',['categories'=>categories]);
    }

    public function add(Request $request){

    }

    public function updateProduitForm($id){
        $categories = Category::all();
        $produit = Produit::find($id);
        return view('Produit.update',['categories' => categories , 'produit' => $produit]);
    }

    public function update(Request $request){

    }

    public function delete($id){

    }

}
