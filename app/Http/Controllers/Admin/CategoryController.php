<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderByDesc('created_at')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $category = new Category();
        // $category->name        = $request->name;
        // $category->slug        = $request->slug;
        // $category->description = $request->description;
        // $category->img         = $request->img;
        // $category->save();

        // $fname = $request->file('imgUpload');
        // if($fname != null){
        //     //сохраняем путь картинки
        //     $category->img = $fname->store('uploads');            
        // }
        $validated = $request->validate([            
                                            'name' => 'required|min:3|max:255',                                       
                                            'slug' => 'required|unique:categories|min:3|max:30',
                                            // 'description'   => 'required|min:3|max:500',
                                            // 'img'   => 'required|image',
                                        ]);

        Category::create( $request->all() );
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([            
                                            'name' => 'required|min:3|max:255',                                       
                                            'slug' => 'required|unique:categories,slug,'.$id.'|min:3|max:30',
                                            // 'description'   => 'required|min:3|max:500',
                                            // 'img'   => 'required|image',
                                        ]);

        $category = Category::findOrFail($id);

        $category->update( $request->all() );
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('/admin/category');
    }
}
