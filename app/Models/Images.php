<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = 'images';
    protected $fillable = ['product_id','image','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];

    ######################## Relations ########################
    public function product() {
        return $this->belongsTo('App\Models\Products','product_id');
    }
    ######################## Relations ########################


}
