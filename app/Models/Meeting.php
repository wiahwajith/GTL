<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $table = 'tbm_meetings';
    protected $guarded = [];

    
    public function races()
    {
        return $this->hasMany(Race::class, 'meeting');
    }
}
