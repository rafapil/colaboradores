<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargosModel extends Model
{
    //
    public $table = "cargos";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function colaborador()
    {
        return $this->hasMany("App\ColaboradorModel", "id");
    }
}
