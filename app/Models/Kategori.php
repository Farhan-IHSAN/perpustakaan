<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'Kategori';
    
    protected $fillable = [
        'nama_Kategori'
    ];

    public function buku()
        {
            return $this->hasMany(buku::class,'kategori_id');
        }
}
