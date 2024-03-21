<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        //cách 1
        $name = 'abbc';
        $title = 'gôt_hoem';
        return view(
            'admin.pages.product_category.index',
            [
                'name' => $name,
                'title' => $title
            ]
        );

        // cách 2
        // return view('admin.pages.product_category.index')
        // ->with('name',$name)
        // ->with('title', $title);

        //cách 3 
        // return view('admin.pages.product_category.index', compact('name','title'));
    }
     public function create() {
        return view(
            'admin.pages.product_category.create'
        );
     }

     public function store(Request $request) {
        $name  = $request-> name;
        $status = $request->status; 
        dd($name, $status);
     }
}
