<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $exam_id;

    public function mount(){
        $this->exam_id = request('id');
        dd($this->exam_id);
    }

    public function render()
    {
        return view('livewire.test');
    }
}
