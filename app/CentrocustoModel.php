<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentrocustoModel extends Model
{
    //
    public $table = "centrocusto";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function colaborador()
    {
        return $this->belongsTo("App\ColaboradorModel", "id");
    }
}
