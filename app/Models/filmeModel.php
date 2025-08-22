<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filmeModel extends Model
{
    use HasFactory;


    protected $table = 'filme';

    protected $fillable = 
    [
        'titulo',
        'genero',
        'lancamento',
        'classificacao',
        'poster',
        'sinopse'
    ];

    public $primaryKey = 'id';


}
