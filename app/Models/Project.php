<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_progetto',
        'slug',
        'descrizione_progetto',
        'linguaggi',
        'immagine'
       
    ];

    public static function generateSlug($nome_progetto){
        return Str::slug($nome_progetto, '-');
    }
}
