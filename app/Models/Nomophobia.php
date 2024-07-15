<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomophobia extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $attributes = [
        'identitas_responden' => "",
        'hasil' => 0
    ];
}
