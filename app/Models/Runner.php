<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;
    protected $table = 'tbm_runners';
    protected $guarded = [];
    
    public function formData()
    {
        return $this->hasOne(FormData::class);
    }

    public function formLastRunrs()
    {
        return $this->hasMany(FormLastRun::class);
    }
}
