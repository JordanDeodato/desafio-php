<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {

            $products = Product::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $products = Product::all();
        }
        
        return view('products.index', ['products' => $products, 'search' => $search]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $products = new Product;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->category = $request->category;
        $products->price = floatval($request->price);
        $products->amount = $request->amount;
        $products->save();
        
        return redirect('products')->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect('/products')->with('msg', 'Produto excluído com sucesso!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('/products/edit', ['product' => $product]);
    }

    public function update(Request $request)
    {
        Product::findOrFail($request->id)->update($request->all());

        return redirect('/products')->with('msg', 'Produto alterado com sucesso!');
    }
}
