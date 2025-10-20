<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingressoModel extends Model
{
    use HasFactory;

    protected $table = 'ingresso';

    protected $fillable = ['idUsers',  'idSala'];
}
