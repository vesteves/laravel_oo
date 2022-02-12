<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'imagem',
        'preco',
        'descricao',
    ];

    protected $appends = ['imagem_url'];

    public function getImagemUrlAttribute()
    {
        return Storage::url($this->attributes['imagem']);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
