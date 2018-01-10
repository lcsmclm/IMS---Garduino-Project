<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userplants extends Model
{

    public $table = "gnomes";
    protected $fillable = ['id', 'name', 'user_id', 'current', 'current_temp', 'current_moisture', 'current_light', 'color', 'alert_status', 'image', 'TIMESTAMP' ,'Title'];

}
