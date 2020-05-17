<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscalaPlantaoModel extends Model
{
    //
    public $table = "escala_plantao";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
