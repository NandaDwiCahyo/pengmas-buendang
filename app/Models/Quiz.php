<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // For defalut value
    protected $attributes = [
        'identitas_responden' => "",
        'hasil' => 0
    ];
}
