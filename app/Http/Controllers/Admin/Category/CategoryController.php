<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;

class CategoryController extends Controller
{
    public function categoryIndex()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function categoryCreate()
    {
        return view('admin.categories.create');
    }

    public function categoryStore(StoreRequest $request)
    {
        $data = $request->validated();
        
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }

    public function categoryShow( $category)
    {
        $category=Category::query()->where('id',$category)->first();
        return view('admin.categories.show', compact('category'));
    }

    public function categoryEdit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function categoryUpdate(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }

    public function categoryDelete(Category $category)
    {
       
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
