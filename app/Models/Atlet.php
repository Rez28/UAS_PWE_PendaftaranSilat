<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
    use HasFactory;

    protected $fillable = ['kontingen_id', 'category_id', 'name', 'gender', 'birth_date', 'weight', 'height', 'photo'];

    // Relasi ke Kontingen
    public function kontingen()
    {
        return $this->belongsTo(Kontingen::class);
    }
    public function setFotoProdukAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['photo'] = $value->store('photo', 'public'); // Menyimpan foto di folder produk_images
        }
    }
}
