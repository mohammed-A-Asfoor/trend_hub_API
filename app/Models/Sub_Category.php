<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    protected $fillable=['category_name','category_id'];
    /*
    since we are using an existing databsae, we need to
    1- disable timestamps whcih automaticly assume thet we have'
     created_at and updated at columns
    2- spefiy the table
    3- specify the primary key 
    */
    public $timestamps = false;
    protected $primaryKey = 'sub_category_id';
    protected $table = 'sub_category';

    public function Sub_categories(){
        return $this->belongsTo(Category::class,'category_id','category_id');
    }

}
