<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'products_images';
    public $timestamps = false;
    
    public function getImagesByProductId($id){

        $product_images = $this->select('url')
                                ->where('products_images.id_product',  $id)
                                ->get();

    

       return $product_images;
    }
}
