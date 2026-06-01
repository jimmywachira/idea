<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Idea;


new class extends Component
{
    public Idea $idea;
    public $discription ="";
    public $status ="";

    public function mount(Idea $idea)
    {
        $this->idea = $idea;
        $this->discription = $idea->discription;
        $this->status = $idea->status;
    }

    public function save()
    {
        $this->idea->discription = $this->discription;
        $this->idea->status = $this->status;
        $this->idea->save();
    }


};
?>

<div class="flow-card backdrop-blur-sm dark:bg-zinc-900 p-6 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700">
    <h1 class='text-xl font-semibold mb-4'>Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi</h1>

<flux:card>
    <form action="/ideas/{{ $idea->id }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
        <flux:fieldset wire:submit.prevent="save">
            <div class="mb-4">
                <flux:input wire:model="discription" label="Description" id="discription" value="{{ $discription }}" />
                <x-forms.error name="discription" />        
                <div class="mb-4">
                <flux:textarea wire:model="status" label="Status" id="status" value="{{ $status }}" />
                <x-forms.error name="status" />
                </div>
                <flux:button type="submit" variant="primary">Update</flux:button>
                </div>
        </flux:fieldset>
    </form>
</flux:card>

</div>
</div>