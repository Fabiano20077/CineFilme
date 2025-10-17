<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'adm';

    protected $fillable = ['nomeAdm', 'emailAdm', 'senhaAdm'];

    protected $primaryKey = 'idAdm';

    public function getAuthPassword()
    {
        return $this->senhaAdm;
    }
}
