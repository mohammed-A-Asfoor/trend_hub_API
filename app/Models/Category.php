<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['icon','category_name','category_type'];
    /*
    since we are using an existing databsae, we need to
    1- disable timestamps whcih automaticly assume thet we have'
     created_at and updated at columns
    2- spefiy the table
    3- specify the primary key 
    */
    public $timestamps = false;
    protected $primaryKey = 'category_id';
    protected $table = 'category';

    public function Sub_categories(){
        return $this->hasMany(Sub_Category::class,'category_id','category_id');
    }

}
