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

    public function getQuestionAttribute(){
        if($this->is_compare) {
            return $this->getRelation('options')->pluck('value')->join('</p><p>');
        }

        return $this->attributes['question'];
    }

    public function getOptionsAttribute(){
        if($this->is_compare) {
            return [
                new Option(['key'=>'A', 'value'=>'Quantity A is greater']),
                new Option(['key'=>'B', 'value'=>'Quantity B is greater']),
                new Option(['key'=>'C', 'value'=>'The two quantities are equal.']),
                new Option(['key'=>'D', 'value'=>'The relationship cannot be determined from the information given.']),
            ];   
        }


        return $this->getRelation('options');
    }
}
