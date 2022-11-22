<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
/*
    since we are using an existing databsae, we need to
    1- disable timestamps whcih automaticly assume thet we have'
     created_at and updated at columns
    2- spefiy the table
    3- specify the primary key 
    */
    public $timestamps = false;
    protected $primaryKey = 'product_id ';
    protected $fillable=['sub_category_id','product_name','description','price','image','stock','status'];
    protected $table = 'gallery';

    public function influencer(){
        return $this->belongsTo(Influencers::class,'influencer_id','influencer_id');
    }
    public function gallery(){
        return $this->belongsTo(Influencers::class,'influencer_id','influencer_id');
    }
    

}
