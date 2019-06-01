<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Projeto extends Model implements Transformable
{
    use TransformableTrait;
    protected $fillable = ['titulo', 'subtitulo', 'descricao', 'imagem'];
    public $timestamps  = true;


    

   
}
