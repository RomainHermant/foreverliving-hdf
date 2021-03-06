<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produit;
use App\Category;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::all();
        return view('auth.admin.products.index',['produits' => $produits]);
    }

    public function addProduitForm(){
        $categories = Category::all();
        return view('auth.admin.products.add',['categories' => $categories]);
    }

    public function add(Request $request){
        $produit = new Produit();
        $produit->name = $request->name;
        $produit->category = $request->category;
        $produit->description = $request->description;
        $produit->weight = $request->weight;
        $produit->price = $request->price;
        $produit->reference = $request->reference;
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/produitImages/');
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
            $produit->image = $image;
         }
        $produit->save();
        return redirect()->route('admin.products');
    }

    public function updateProduitForm($id){
        $categories = Category::all();
        $produit = Produit::find($id);
        return view('auth.admin.products.update',['categories' => $categories , 'products' => $produit]);
    }

    public function update(Request $request){
        $produit = Produit::find($request->id);
        $produit->name = $request->name;
        $produit->category = $request->category;
        $produit->description = $request->description;
        $produit->weight = $request->weight;
        $produit->price = $request->price;
        $produit->reference = $request->reference;
        if ($files = $request->file('image')) {
            $destinationPath = 'public/produitImages/';
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
            $produit->image = $image;
         }
        $produit->save();
        return redirect()->route('admin.products');
    }

    public function delete($id){
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('admin.products');
    }

}
