<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $data['category'] = Category::findOrFail($id);
        $data['allcategory'] = Category::select('id' , 'name')->get();
        $data['skills'] = $data['category']->skills()->paginate(6);

        return view('web.categories.show')->with($data);

    }
}
