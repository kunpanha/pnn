<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use Gate;

class CategoryController extends Controller
{
    public function category()
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $data = [
            'category' => Category::all(),
        ];
        return view('category.category', $data);
    }

    public function insert()
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        return view('category.insert');
    }

    public function postInsertCategory(Request $request)
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $request->validate([
                'category_en' => 'required',
                'category_kh' => 'required',
                'status' => 'required',
            ], [
                'category_en.required' => 'Category English is required',
                'category_kh.required' => 'Category Khmer is required',
                'status.required' => 'Status is required',
            ]);

        $category = new Category();
        $category->category_en = $request['category_en'];
        $category->category_kh = $request['category_kh'];
        $category->status = $request['status'];

        $category->save();

        Toastr::success('Category has been successfully created');
        return redirect()->route('category');
    }
}
