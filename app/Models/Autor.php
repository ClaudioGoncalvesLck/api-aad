<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'PrimeiroNome', 'UltimoNome', 'Telefone',
    ];

    public function livros()
    {
        return $this->belongToMany('App\Livro', 'Royalties');
    }
}
