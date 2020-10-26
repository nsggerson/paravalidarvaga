<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelModelo extends Model
{
    //
    protected $table= 'modelos';

    public function relMarca()
    {
        //return $this->hasMany('App\Models\ModelModelo','fk_marca_id');
        //return $this->hasOne('App\Models\ModelMarca','id','fk_marca_id');
        return $this->hasOne('App\Models\ModelModelo','id','fk_modelo_id');
    }

    public function relProduto()
    {
        return $this->hasMany('App\Models\ModelProduto','fk_modelo_id');
    }


}
