<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $table = 'tbm_races';
    protected $guarded = [];

    public function runner()
    {
        return $this->hasOne(Runner::class, 'race');
    }


}
