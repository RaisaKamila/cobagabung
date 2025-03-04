<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    const CREATED_AT = 'dibuat_pada';
    const UPDATED_AT = 'diperbarui_pada';

    public $timestamps = true;
    
    protected $table = 'siswa';
    protected $primaryKey = 'NISN';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['NISN', 'nama', 'kelas', 'jurusan'];
}
