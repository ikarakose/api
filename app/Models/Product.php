<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table ="products";
    protected $fillable = ['aid','stockid','name','slug','category','qty','price','pricetype','priceicon','country','notes','marketid','marketname','marketnumber','marketurl','marketqty','marketprice','marketsaleprice','marketcategory','marketstatus','marketlink','sin','linked','onsale','publish','active','open','image'];


    public function getCategory()
    {
        return $this->hasOne(Category::class,'id','category');
    }
}
