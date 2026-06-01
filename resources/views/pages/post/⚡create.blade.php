<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Idea;

new #[Layout('layouts::app', ['title' => 'Create Post'])] class extends Component
{
    public $discription ="";
    public $status ="";

    public function save()
    {
        sleep(1); // Simulate a delay for demonstration purposes
        Post::create($this->validate([
            'discription' => 'required|string',
            'status' => 'required|string|in:draft,published',
        ]));

        return redirect('/ideas');
    }
};
?>

<div class="flow-card backdrop-blur-sm dark:bg-zinc-900 p-6 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700">
    <h2 class="text-2xl font-bold mb-4">Happiness is not something readymade. It comes from your own actions. - Dalai Lama</h2>
    
    
    <p>{{ $discription }}</p>
    <p>{{ $status }}</p>

<flux:card>
    <form action="/ideas" method="POST" class="space-y-4">
            @csrf
        <flux:fieldset wire:submit.prevent="save">
            <div class="mb-4">
                <flux:input wire:model="discription" label="Description" id="discription" />
                <x-forms.error name="discription" />
            </div>

            <div class="mb-4">
                <flux:textarea wire:model="status" label="Status" id="status" />
                <x-forms.error name="status" />
            </div>

            <flux:button type="submit" variant="primary">Save</flux:button>
        </flux:fieldset>
    </form>
</flux:card>
</div>
        