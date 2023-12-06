<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa_tabel';
    protected $fillable = ['nama', 'nis', 'jk', 'alamat', 'tgl_lahir'];
}
