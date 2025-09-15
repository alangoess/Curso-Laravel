<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meubanco extends Model
{
    /** @use HasFactory<\Database\Factories\MeubancoFactory> */
    use HasFactory;
    protected $table = 'meubancos';
}
