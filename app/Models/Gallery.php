<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
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
    protected $primaryKey = 'gallery_id';
    protected $fillable=['influencer_id','image','status'];
    protected $table = 'gallery';

    public function influencer()
    {
        return $this->belongsTo(Influencers::class,'influencer_id','influencer_id');
    }
}
