<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();

        return view('admin.categories',[
            'categories' => $categories,
            'title' => 'All Categories | Journal Manager | Federal College of Education (Technical) Umunze']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();

        return view('admin.addCategory', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        $category = new Category;
        $category->category_name = $request->category_name;

        $category->save();


        return redirect()->route('category.index')->with('success','Category created successfully.');

    }

    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin.updateCategory',compact('category'));

    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required'
        ]);


        $category->update($request->all());

        return redirect()->route('category.index')->with('success','Category name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();



        return redirect()->route('category.index')->with('deleted','Category name deleted successfully');
    }
}
