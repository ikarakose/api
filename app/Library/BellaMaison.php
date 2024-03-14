<?php

namespace App\Library;

use App\Interfaces\IApi;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BellaMaison implements IApi
{

    protected function fetch($url)
    {
        $api=  Http::withOptions(['verify' => false])->get($url);
        return $response = json_decode($api->body());
    }

    public function fetchProduct($args)
    {   
         $maxPage= $args['maxpage'];
    
         for($i=1;$i<=$maxPage;$i++)
         {

               $response = $this->fetch("https://bellamaison.armasoft.us/api/v1/products/list?page=".$i);

            foreach($response->data as $product)
            {
            
                $new = [
                'aid'=>$product->product_id,
                'stockid'=>$product->sku,
                'name'=>$product->listing_title->value,
                'slug'=>Str::slug($product->listing_title->value),
                'category'=>($product->as_category_name ? $this->checkCategory($product->as_category_name) : 0),
                'qty'=>$product->ax_qty_value,
                'price'=>$product->listing_price,
                'pricetype'=>$product->currency,
                'priceicon'=>$product->currency_smybol,
                'country'=>$product->store_country,
                'notes'=>$product->notes,
                'marketid'=>$product->marketplace_id,
                'marketname'=>$product->marketplace_name,
                'marketnumber'=>$product->marketplace_listing_number,
                'marketurl'=>$product->item_page_url,
                'marketqty'=>$product->marketplace_qty_value,
                'marketprice'=>$product->marketplace_price_value,
                'marketsaleprice'=>$product->marketplace_sale_price_value,
                'marketcategory'=>$product->marketplace_category,
                'marketstatus'=>$product->marketplace_status,
                'marketlink'=>$product->item_page_url,
                'sin'=>$product->asin,
                'linked'=>$product->is_linked,
                'onasdasdsale'=>$product->is_on_sale,
                'publish'=>$product->publish_status,
                'active'=>$product->publish_status,
                'open'=>$product->open_date
                  ];

                if(isset($args['image']) and $product->main_image_url !== null)
                {
                $image = $product->main_image_url;
                $getImage = file_get_contents($image);
                $imagename = Str::slug($product->listing_title->value).$this->getImageExt($image);
                Storage::disk('public')->put($imagename, $getImage);
                $new['image'] = $imagename;
                }

                try{
                $p = Product::updateOrCreate(['aid'=>$product->product_id],$new);
              
                }catch(Exception $e)
                {
                    throw new Exception($e->getMessage());
                }

            }

         }

         return redirect(route('bellam'))->withSuccess('Successful');

    }

    public function checkCategory($name)
    {
        $category = Category::where("name",$name)->first();

        if($category)
        return $category->id;

        $category = Category::create([
            'name' => $name,
            'slug' => Str::slug($name),
            'category'=> 0 
        ]);

        return $category->id;
    }

    public function getImageExt($image)
    {
        $s = explode(".",$image);
        return ".".end($s);
    }




}