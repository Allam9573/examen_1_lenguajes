<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    public $table = 'contactos';
    public $timestamps = false;

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $fillable = ['nombre','apellido', 'teléfono'];
}
