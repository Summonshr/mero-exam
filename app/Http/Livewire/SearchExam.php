<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\Set;
use Livewire\Component;

class SearchExam extends Component
{
    public $search;

    public $results;

    public function enroll($set_id){
        $exam = new Exam();
        $exam->set_id = $set_id;
        $exam->user_id = auth()->id();
        $exam->save();
        $exam->populate();

        return redirect()->to($exam->route());
    }

    public function render()
    {
        $this->results = [];
        if($this->search && strlen($this->search) > 2) {
            $this->results = Set::search($this->search)->query(function($query){
                return $query->withCount('questions')->has('questions');
            })->get();
        }

        return view('livewire.search-exam');
    }
}
