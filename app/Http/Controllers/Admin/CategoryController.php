<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    //

    public function index ()
    {
        return view('admin.categories.index');

    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories|string|max:200',
            'brief' => 'required',
        ]);


        $data['name'] = $request->name;
        $data['brief'] = $request->brief;
        $save = Category::create($data);
        if ($save){
            Session::flash("flash_notification", [
                "level"     => "success",
                "message"   => "Category Created."
            ]);
        }else{

        }
        return Redirect::route('categories.index');
        
    }
}
