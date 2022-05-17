<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $fillable = ['kode_buku', 'judul_buku', 'pengarang', 'penerbit', 'tahun_terbit'];
}
