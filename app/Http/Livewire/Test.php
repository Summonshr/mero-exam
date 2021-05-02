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

    protected $paginationTheme = 'tailwind';


    public function mount()
    {
        $this->exam_id = request('id');
    }

    public function checkAnswer($answer_id)
    {
        $answer = $this->history->answer ?? [];
        
        if($this->question->is_multiple) {
            array_push($answer, $answer_id);
        } else {
            $answer = [ $answer_id ];
        }

        $this->history->answer = $answer; 

        $this->history->save();
    }

    public function updatingPage(){
        $this->page = 5;
    }

    public function render()
    {
        if($this->history && $this->history->answer === null) {
            $this->history->skipped = true;
            $this->history->save();
        } 

        $query = History::with('question.options')->whereExamId($this->exam_id);

        $query->update(['is_current'=>false]);

        $list = $query->paginate(1);

        $this->history  = $list->first();
        
        $this->question = $this->history->question;

        $this->history->is_current = true;

        $this->history->save();

        return view('livewire.test', ['list' => $list]);
    }
}
