<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    public $timestamps = false;
    protected $primaryKey = 'id_category';


    public static function getDescriptionById($id) {
        $category = Category::find($id);
        return $category->description;
    }
}
