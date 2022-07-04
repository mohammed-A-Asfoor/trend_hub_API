<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

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
