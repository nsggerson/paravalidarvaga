<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    //
    protected $table='produtos';

    public function relModelo()
    {
        //return $this->hasMany('App\Models\ModelModelo','fk_marca_id');
        //return $this->hasOne('App\Models\ModelMarca','id','fk_marca_id');
        return $this->hasOne('App\Models\ModelModelo','id','fk_modelo_id');
    }
}
