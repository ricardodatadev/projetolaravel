<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nome', 'nicho'];


    public function funcionarios()
    {
        return $this->hasMany(Funcionarios::class);
    }
}
