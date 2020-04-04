<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    //
    protected $fillable = [
        'Baslik', 'Icerik', 'OkumaSayisi',
    ];
}
