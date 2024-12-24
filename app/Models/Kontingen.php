<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontingen extends Model
{
    use HasFactory;
    protected $table = 'kontingens';
    protected $fillable = ['user_id', 'name', 'address', 'phone', 'email', 'tanggal_berdiri', 'deskripsi', 'total_atlet', 'total_official'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Official
    public function officials()
    {
        return $this->hasMany(Official::class);
    }

    // Relasi ke Atlet
    public function atlets()
    {
        return $this->hasMany(Atlet::class);
    }
}
