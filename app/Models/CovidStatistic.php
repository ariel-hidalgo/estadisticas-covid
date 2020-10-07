<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidStatistic extends Model
{
    use HasFactory;

    protected $fillable = ['cases', 'dead', 'city_id'];
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
