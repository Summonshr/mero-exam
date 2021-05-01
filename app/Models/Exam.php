<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function populate(){
        $this->questions->map(function($question){
            $history = new History();
            $history->question_id = $question->id;
            $this->history()->save($history);
        });
    }

    public function history(){
        return $this->hasMany(History::class);
    }

    public function questions(){
        return $this->hasMany(Question::class,'set_id','set_id');
    }

    public function route(){
        return route('exam', ['id'=> $this->id]);
    }
}
