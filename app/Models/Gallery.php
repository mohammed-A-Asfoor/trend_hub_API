<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'gallery_id';
    protected $fillable=['influencer_id','image','status'];
    protected $table = 'gallery';

    public function influencer()
    {
        return $this->belongsTo(Influencers::class,'influencer_id','influencer_id');
    }
}
