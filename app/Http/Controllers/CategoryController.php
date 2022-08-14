<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function list()
    {
        /*2 way to connect to the table Category and query all the results*/

        /* $categories = DB::table('categories')->get(); */
        $categories = Category::all();

        return view('categoriesList', ['categories' => $categories]);
    }
}
