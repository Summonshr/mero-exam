<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public $casts = [
        'is_current'=>'bool',
        'answer'=>'array'
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
