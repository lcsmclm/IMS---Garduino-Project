<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantlist extends Model
{
    protected $primaryKey = 'plantlist_id';
    public $table = "plantlist";
    protected $fillable = ['plantlist_id', 'plantlist_name', 'plantlist_desc', 'plantlist_img'];
}
