<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table="comments";
    protected $primaryKey="id";
    public $timestamps=false;
}
