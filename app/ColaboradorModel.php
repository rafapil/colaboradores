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
        return $this->belongsTo(CargosModel::class, "cargos_id");
    }

    public function centrocusto()
    {
        return $this->belongsTo(CentrocustoModel::class, "centrocusto_id");
    }

    public function empresa()
    {
        return $this->belongsTo(EmpresaModel::class, "empresa_id");
    }

    public function estabelecimento()
    {
        return $this->hasMany(EstabelecimentoModel::class, "estabelecimento_id");
    }

    public function squad()
    {
        return $this->belongsTo(SquadModel::class, "squad_id");
    }

    public function tribo()
    {
        return $this->belongsTo(TriboModel::class, "tribo_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "users_id");
        // return $this->hasMany('App\User', 'id');
    }
}
