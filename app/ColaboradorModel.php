<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColaboradorModel extends Model
{
    //
    public $table = "colaborador";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function cargos()
    {
        $this->hasMany("App\CargosModel", "cargos_id");
    }

    public function centrocusto()
    {
        $this->hasMany("App\CentrocustoModel", "centrocusto_id");
    }

    public function empresa()
    {
        $this->hasMany("App\EmpresaModel", "empresa_id");
    }

    public function estabelecimento()
    {
        $this->hasMany("App\EstabelecimentoModel", "estabelecimento_id");
    }

    public function squad()
    {
        $this->hasMany("App\SquadModel", "squad_id");
    }

    public function tribo()
    {
        $this->hasMany("App\TriboModel", "tribo_id");
    }

    public function user()
    {
        $this->hasMany("App\User", "users_id");
    }
}
