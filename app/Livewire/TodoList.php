<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{

    // public $todos;
    public $task = '';

    public function mount()
    {

    }

    public function addTodo()
    {
        if (!empty($this->task)) {
            $todo = Todo::create([
                'task' => $this->task
            ]);

            $this->clearField();
        }
    }

    public function deleteTodo(Todo $todo)
    {

       $todo->delete();

    }

    public function doneTodo(Todo $todo)
    {
        $todo->status = 'done';
        $todo->save();
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::all()
        ]);
    }

    public function clearField(){
        $this->task = '';
    }
}
