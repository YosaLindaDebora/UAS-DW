<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function home(){
        return view('create');
    }
    public function store(Request $request){
        Products::create($request->all());
        return redirect('/products');
    }
    public function viewProduct(){
        $products = Products::all();
        return view('products', compact('products'));
    }
    public function edit($id){
        $products = Products::findOrFail($id);
        return view('edit', compact('products'));
    }
    public function update(Request $request, $id){
        Products::findOrFail($id)->update($request->all());
        return redirect('/products');
    }
    public function delete($id){
        Products::destroy($id);
        return back();
    }
}