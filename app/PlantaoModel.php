<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantaoModel extends Model
{
    //
    public $table = "plantao";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function colaborador()
    {
        return $this->belongsTo(ColaboradorModel::class, "id");
    }
}
