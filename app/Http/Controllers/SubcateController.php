<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use App\Models\Subcate;
use Gate;

class SubcateController extends Controller
{
    public function subcate()
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $data = [
            'subcate' => Subcate::leftJoin('categories', 'subcates.category', '=', 'categories.id')
                      ->select('subcates.*', 'categories.category_en as cate_title')
                      ->get(),
        ];
        return view('subcate.subcate', $data);
    }

    public function insert()
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $data = [
            'category' => Category::all(),
        ];
        return view('subcate.insert', $data);
    }

    public function postInsertSubcate(Request $request)
    {
        if(!Gate::allows('isAdmin')){
            abort(404,"Sorry, You can do this actions");
        }
        $request->validate([
                'subcate_en' => 'required',
                'subcate_kh' => 'required',
                'category' => 'required',
                'status' => 'required',
            ], [
                'subcate_en.required' => 'Sub Category English is required',
                'subcate_kh.required' => 'Sub Category Khmer is required',
                'category.required' => 'Category is required',
                'status.required' => 'Status is required',
            ]);

        $subcate = new Subcate();
        $subcate->subcate_en = $request['subcate_en'];
        $subcate->subcate_kh = $request['subcate_kh'];
        $subcate->category = $request['category'];
        $subcate->status = $request['status'];

        $subcate->save();

        Toastr::success('Sub Category has been successfully created');
        return redirect()->route('subcate');
    }
}
