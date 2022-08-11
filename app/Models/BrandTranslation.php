<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    //
    protected $table = 'brand_translations';
    protected $fillable = ['name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;
}
