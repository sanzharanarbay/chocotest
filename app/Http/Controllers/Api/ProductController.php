<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductByCategory($id){
        $products = Product::where('category_id', $id)->get();
        return response()->json($products, 200);
    }

    public function index(){
        $products = Product::with('category')->get();
        return response()->json($products, 200);
    }

    public function store(Request $request){

        if ($request->user()->can('create-product')) {

            $this->validate($request, [
                'name'=>'required',
                'color'=>'required',
                'weight'=>'required',
                'price'=>'required',
                'category_id' => 'required',
            ]);

            $product = new Product();
            $this->saveProduct($product, $request);
            return response()->json(['message'=>'Product successfully saved!!!'], 201);
        }
        else{
            abort(401);
        }

    }

    public function update(Request $request, $id){

        if ($request->user()->can('update-product')) {

            $this->validate($request, [
                'name'=>'required',
                'color'=>'required',
                'weight'=>'required',
                'price'=>'required',
                'category_id' => 'required',
            ]);

            $product = Product::findOrFail($id);
            $this->saveProduct($product, $request);
            return response()->json(['message'=>'Product successfully updated!!!'], 200);
        }
        else{
            abort(401);
        }

    }

    public function saveProduct(Product $product, Request $request){
        $product->name = $request->name;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
    }

    public function destroy($id, Request $request){

        if ($request->user()->can('delete-product')) {
            $product = Product::findOrFail($id);
            $product->delete();
            return response()->json(['message'=>'Product successfully deleted!!!'], 200);
        }else{
            abort(401);
        }

    }


}
