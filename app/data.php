<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table="user_table";
    protected $primaryKey="id";
    public $timestamps=false;
}
