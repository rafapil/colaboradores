<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaModel extends Model
{
    //
    public $table = "empresa";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
