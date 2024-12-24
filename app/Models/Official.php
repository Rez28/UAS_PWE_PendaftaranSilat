<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;

    protected $fillable = ['kontingen_id', 'name', 'gender', 'Jabatan'];

    // Relasi ke Kontingen
    public function kontingen()
    {
        return $this->belongsTo(Kontingen::class);
    }
}
