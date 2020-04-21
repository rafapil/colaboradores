<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SquadModel extends Model
{
    //
    public $table = "squad";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
