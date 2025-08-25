<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salaModel extends Model
{
    use HasFactory;

    protected $table = 'sala';

    protected $fillable = ['qtaCadeira', 'dataSala', 'horarioSala','idFilme'];

    protected $primaryKey = 'idSala';
}
