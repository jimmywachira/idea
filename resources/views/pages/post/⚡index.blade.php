<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Idea;

new class extends Component
{
    public $ideas = [];

    public function mount()
    {
        return $this->ideas = Idea::all();
    }
};
?>

<div>
    <h1 class='text-xl font-semibold mb-4'>Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi</h1>
    <flux:card>
        @foreach ($ideas as $idea)
        <flux:card class="mb-4">
            <p class="p-2 m-2">{{ $idea->description }} </p>
            <h2 class="p-2 m-2">{{ $idea->status }} </h2> 
        </flux:card>  
        @endforeach
    </flux:card> 
</div>