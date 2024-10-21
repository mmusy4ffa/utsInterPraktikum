<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = ['nama_kategori'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
