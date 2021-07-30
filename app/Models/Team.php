<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'league_id',
        'name',
        'street',
        'house_number',
        'postal_code',
        'town'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
