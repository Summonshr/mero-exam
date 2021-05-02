<?php

namespace App\Http\Livewire;

use App\Models\History;
use Livewire\Component;
use Livewire\WithPagination;

class Test extends Component
{
    use WithPagination;
    public $exam_id;

    public $history;

    public $question;

    public function mount(){
        $this->exam_id = request('id');
    }

    public function render()
    {

        $hhistory = History::with('question.options')->whereExamId($this->exam_id)->paginate(1);
        $this->question = $hhistory->first()->question;
        
        return view('livewire.test',['paginator'=>History::with('question.options')->whereExamId($this->exam_id)->paginate(1)]);
    }
}
