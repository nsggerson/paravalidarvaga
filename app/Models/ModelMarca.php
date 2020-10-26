<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignKeyDefinition;

class ModelMarca extends Model
{
    //
    protected $table= 'marcas';

    public function relModelo()
    {
        return $this->hasMany('App\Models\ModelModelo','fk_marca_id');
    }
}
