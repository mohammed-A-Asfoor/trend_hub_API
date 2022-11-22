<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencers extends Model
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
    protected $primaryKey = 'influencer_id';
    protected $fillable=['first_name','last_name','description','image','influencer_category_id','status'];
    protected $table = 'influencers';

    public function Gallaries()
    {
        return $this->hasMany(Gallery::class,'influencer_id','influencer_id');
    }
}
