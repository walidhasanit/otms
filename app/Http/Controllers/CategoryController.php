<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message', 'category all info successfully');
    }
    public function manage()
    {
        return view('admin.category.manage', ['categories' => Category::all(),]);
    }
    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/mange/category')->with('message', 'update category info successfully');


    }
    public function updateStatus($id)
    {
        return redirect('/mange/category')->with('message', Category::updateStatus($id));
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/mange/category')->with('message', 'delete category info successfully');
    }
}
