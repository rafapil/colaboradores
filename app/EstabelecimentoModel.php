<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstabelecimentoModel extends Model
{
    //
    public $table = "estabelecimento";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
