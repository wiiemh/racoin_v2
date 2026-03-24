<?php

namespace App\Models;

class ApiKey extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'apikey';
    protected $primaryKey = 'id_key';
    public $timestamps = false;
}
