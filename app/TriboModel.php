<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TriboModel extends Model
{
    //
    public $table = "tribo";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

}
