<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('admin');
        $categories = Category::all();
        return view('dashboard.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $validatedData = $request->validate([
            "name" => 'required|max:30',
            "slug" => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        // Cek apakah slug sudah ada di database
        $slugExists = Category::where('slug', $request->slug)->exists();
        if ($slugExists) {
            // Jika slug sudah ada, tambahkan -angka pada akhir slug
            $count = 2;
            while (Category::where('slug', $request->slug . '-' . $count)->exists()) {
                $count++;
            }
            $validatedData['slug'] = $request->slug . '-' . $count;
        } else {
            // Jika slug belum ada, gunakan slug yang diinput oleh user
            $validatedData['slug'] = $request->slug;
        }

        $validatedData['user_is_admin'] = auth()->user()->is_admin;

        Category::create($validatedData);
        return redirect('/dashboard/categories')->with('success', 'New Category Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $this->authorize('admin');
        return view('dashboard.categories.edit', [
            'category' => $category,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->authorize('admin');
        $rules = [
            "name" => 'required|max:30',
        ];


        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_is_admin'] = auth()->user()->is_admin;

        Category::where('id', $category->id)
            ->update($validatedData);

        if ($category->author->id !== auth()->user()->id) {
            abort(403);
        }

        return redirect('/dashboard/categories')->with('success', 'Category Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->authorize('admin');
        if ($category->image) {
            Storage::delete($category->image);
        }
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category Has Been Deleted!');
    }
}
