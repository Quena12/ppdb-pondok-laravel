<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santris'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['name', 'photo_path']; // Jika diperlukan
}