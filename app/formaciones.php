<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formaciones extends Model
{
    protected $fillable = ['foCurriculum','foTitulo','foEspecialidad','foInstitucion', 'foFecha'];
    protected $dates = ['created_at', 'updated_at'];

}

