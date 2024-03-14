<?php

namespace App\Managers;

use App\Interfaces\IApi;
use Illuminate\Http\Request;

class ApiManager
{
    protected IApi $api;
    protected $args;

    public function __construct(IApi $api,Request $request)
    {   
        $this->api = $api;
        $this->args=[
            'image'=>$request->image,
            'maxpage'=>$request->maxpage
          ];

    }

    public function updateProducts()
    {
       return $this->api->fetchProduct($this->args);
        
    }

    public function updateCategories()
    {
        
    }

    public function updateBrands()
    {
        
    }
   

}