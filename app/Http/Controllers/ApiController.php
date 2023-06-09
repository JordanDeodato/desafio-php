<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ApiController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::get()->toJson(JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
        return response($products, 200);
    }

    public function createProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->amount = $request->amount;
        $product->save();

        return response()->json([
            "message" => "product record created"
        ], 201);
    }

    public function getProduct($id)
    {
        if (Product::where('id', $id)->exists()) {
            $product = Product::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
            return response($product, 200);
          } else {
            return response()->json([
              "message" => "Product not found"
            ], 404);
          }
    }

    public function updateProduct(Request $request, $id)
    {
        if (Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->name = is_null($request->name) ? $product->name : $request->name;
            $product->description = is_null($request->description) ? $product->description : $request->description;
            $product->category = is_null($request->category) ? $product->category : $request->category;
            $product->price = is_null($request->price) ? $product->price : $request->price;
            $product->amount = is_null($request->amount) ? $product->amount : $request->amount;
            $product->save();
    
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
            
        }
    }

    public function deleteProduct($id)
    {
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Product not found"
            ], 404);
          }
    }
}
