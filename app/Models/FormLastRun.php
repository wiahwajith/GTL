<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormLastRun extends Model
{
    use HasFactory;
    protected $table = 'tbm_form_last_runrs';
    protected $guarded = [];

}
