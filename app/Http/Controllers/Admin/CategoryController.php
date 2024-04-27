<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\UpdateCategoryRequest;
use App\Http\Requests\Requets\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories = Category::all();
        return view('admin.category.index', compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $name = $request->name;
        $slug = $request->slug;
        $status = $request->status;

        // Kiểm tra xem danh mục đã tồn tại trong cơ sở dữ liệu chưa
        $existingCategory = Category::where('name', $name)->first();

        if ($existingCategory) {
            // Nếu danh mục đã tồn tại, thông báo cho người dùng và chuyển hướng trở lại trang tạo mới
            return redirect()->route('category.create')->with('error', 'Danh mục đã tồn tại trong cơ sở dữ liệu.');
        }

        $check = Category::create([
            'name' => $name,
            'slug' => $slug,
            'status' => $status
        ]);

        $message = $check ? "Tao danh muc thanh cong" : "Tao danh muc that bai";

        //Flash message
        return redirect()->route('category.index')->with('msg', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $name = $request->name;
        $slug = $request->slug;
        $status = $request->status;

        $productCategory = Category::find($id);
        $productCategory->name = $name;
        $productCategory->slug = $slug;
        $productCategory->status = $status;
        $productCategory->save();

        return redirect()->route('category.index')->with('msg', "Cap nhat danh muc thanh cong");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = DB::table('categories')->where('id', $id)->delete();

        //Eloquent ORM -> Object Relational Mapping
        // $check = Category::destroy($id);

        $message = $check ? "Xoa danh muc thanh cong" : "Xoa danh muc that bai";

        //Flash message
        return redirect()->route('category.index')->with('msg', $message);
    }
}
