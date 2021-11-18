<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Brand;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function getList(){

        $array = $this->select( 
                                'products.id', 
                                'products.id_category as product_id_category', 
                                'products.id_brand as product_id_brand', 
                                'products.name as product_name', 
                                'products.description as product_description',
                                'products.stock as product_stock',
                                'products.price as product_price',
                                'products.price_from as product_price_from',
                                'products.price_from as product_price_from',
                                'products.rating as product_rating',
                                'products.featured as product_featured',
                                'products.sale as product_sale',
                                'products.bestseller as product_bestseller',
                                'products.new_product as new_product',
                                'products.options as product_options',
                                'categories.name as categorie_name',
                                'brands.name as brand_name'
                              )
                      ->join('categories', 'products.id_category', '=', 'categories.id')
                      ->join('brands', 'products.id_brand', '=', 'brands.id')
                      ->paginate(8);
        

        return $array;
    }

}
