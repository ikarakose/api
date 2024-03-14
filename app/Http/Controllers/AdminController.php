<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.home");
    }

    public function products(Request $request)
    {
         $query = Product::query();
         if($request->category)
         {
            $query->where('category',$request->category);
         }
         if($request->marketplace)
         {
            
            $query->where('marketid',$request->marketplace);
         }
         if($request->minprice && $request->minprice > 0 )
         {
            $query->where('price','>=',$request->minprice);
         }
         if($request->maxprice && $request->maxprice > 0 )
         {
            $query->where('price','<=',$request->maxprice);
         }
         $products =  $query->get();
         $categories = Category::orderBy('name')->get();
         return view('admin.products',compact(['products','categories']));
    }

    public function categories()
    {
         $categories = Category::all();
         return view('admin.categories',compact(['categories']));
    }

    public function bellaMaison()
    {

      return view('admin.bellamaison');

    }

 
}
