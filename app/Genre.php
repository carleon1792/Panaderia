<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table ='genres';
    protected $primaryKey='id';
    public $timestamps=true;
}
