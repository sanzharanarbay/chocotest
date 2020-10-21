<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function getCategories(){
        $categories = Category::all();
        return response()->json($categories, 200);
    }

    public function store(Request $request){

        if ($request->user()->can('create-category')) {

            $this->validate($request, [
                'name'=>'required',
                'slug'=>'required',
            ]);

            $category = new Category();
            $this->saveCategory($category, $request);
            return response()->json(['message'=>'Category successfully saved!!!'], 201);
        }
        else{
            abort(401);
        }

    }

    public function update(Request $request, $id){

        if ($request->user()->can('update-category')) {

            $this->validate($request, [
                'name'=>'required',
                'slug'=>'required',
            ]);

            $category = Category::findOrFail($id);
            $this->saveCategory($category, $request);
            return response()->json(['message'=>'Category successfully updated!!!'], 200);
        }
        else{
            abort(401);
        }

    }

    public function saveCategory(Category $category, Request $request){
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
    }

    public function destroy($id, Request $request){

        if ($request->user()->can('delete-category')) {
            $category = Category::findOrFail($id);
            $category->delete();
            return response()->json(['message'=>'Category successfully deleted!!!'], 200);
        }else{
            abort(401);
        }

    }

}
