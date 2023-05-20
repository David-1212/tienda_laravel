<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function usuarioproductos()
    {
        return $this->belongsToMany(User::class, 'producto_usuario');
    }
}
