<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','name', 'type'];

    /**
     * Relasi dengan tabel atlets.
     */
    public function atlets()
    {
        return $this->hasMany(Atlet::class);
    }
    public function eventMatch()
    {
        return $this->hasMany(Categories::class);
    }

}
