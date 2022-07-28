<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsTranslation extends Model
{
    //
    protected $table = 'setting_translations';
    protected $fillable = ['value'];
//    protected $hidden = [];
    public $timestamps = false;
}
