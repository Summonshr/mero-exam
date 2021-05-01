<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function populate(){
        dd($this->questions);
    }

    public function questions(){
        return $this->hasMany(Question::class,'set_id','set_id');
    }
}
