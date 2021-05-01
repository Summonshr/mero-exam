<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $casts = ['right_answer' => 'json','multiple'=>'bool','is_compare'=>'bool'];

    public function options(){
        return $this->hasMany(Option::class);
    }
}
