<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori_id',
        'judul',
        'foto',
        'deskripsi'
    ];
    public function kategori()
    {
    	return $this->belongsTo(Kategori::class);
    }
}
