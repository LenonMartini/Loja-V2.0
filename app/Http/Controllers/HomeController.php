<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;

class HomeController extends Controller

{
    private $product;
    private $product_image;
    public function __construct(Product $product, ProductImage $product_image, Category $category){
        $this->product = $product;
        $this->product_image = $product_image;
        $this->category = $category;
    }
    
    public function index(){

        $array = $this->product->getList();          
        foreach($array as $key => $item){

            $array[$key]['images'] = $this->product_image->getImagesByProductId($item['id']);
            
            
        }

        $categories = $this->category->getList();

       /* echo "<pre/>";
        print_r($categories);
        exit;*/

        return view('index', [
            'products' => $array,
            'categories' => $categories
           
        ]);
    }


}
