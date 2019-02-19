<?php
namespace App\Models;

use App\Models\BaseModel;
use App\Models\Category;
class Product extends BaseModel
{
    public $table = 'products';
    public $cols = ['name', 'cate_id', 'price', 
                    'star', 'views', 'short_desc', 
                    'detail', 'image'];

    // public function getCate(){
    //     $cate = Category::where('id', '=', $this->cate_id)->get();
    //     return $cate[0];
    // }
}


?>