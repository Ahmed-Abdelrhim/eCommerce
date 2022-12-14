<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Product extends Model
{
    //
    use Translatable;
    protected $table = 'products';
    protected $fillable = [
        'brand_id',
        'slug',
        'price',
        'special_price',
        'special_price_type',
        'special_price_start',
        'special_price_end',
        'selling_price',
        'sku',
        'manage_stock',
        'qty',
        'in_stock',
        'viewed',
        'is_active',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    protected $with = ['translations'];
    protected $casts = [
        'is_active' => 'boolean',
        'manage_stock'=>'boolean',
        'in_stock'=>'boolean',
    ];
    protected $translatedAttributes = ['name','description','short_description'];


    ######################## Relations ########################
    public function image() {
        return $this->hasMany('App\Models\Images','product_id');
    }

    public function category() {
        return $this->belongsToMany('App\Model\ProductCategory','product_id','category_id','id','id');
    }

    public function images() {
        return $this->morphMany(Image::class,'imageable');
    }

    ######################## Relations ########################
}
//id	brand_id	price	special_price	special_price_type	special_price_start	special_price_end
//selling_price	sku	manage_stock	qty	in_stock	viewed	is_active	deleted_at	created_at	updated_at
