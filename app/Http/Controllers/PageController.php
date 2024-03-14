<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{

    public function product($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('pages.product',compact(['product']));
    }

}
