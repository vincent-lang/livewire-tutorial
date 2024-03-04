<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('todos')]
class Todo extends Component
{

    public $todo = '';

    public $todos = [];

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
