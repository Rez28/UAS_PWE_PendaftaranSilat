<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventMatch extends Model
{
    use HasFactory;
    
    protected $table = 'matches';
    protected $fillable = [
        'category_id', 'athlete_1', 'athlete_2', 'match_time', 'result'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}

