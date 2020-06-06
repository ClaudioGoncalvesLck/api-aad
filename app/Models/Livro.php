<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'Titulo',
    ];

    public function autores() {
        return $this->belongToMany('App\Autor', 'Royalties');
    }
}
