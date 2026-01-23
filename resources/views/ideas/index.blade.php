<x-layout>
    @if($ideas->count() )
            <div class="max-w-3xl mx-auto mt-4">
                <h2 class="text-2xl font-bold mb-6">Submitted Ideas</h2>
                <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
                    @foreach($ideas as $idea)
                    <x-ideacard href="/ideas/{{ $idea->id }}">{{ $idea->description }}</x-ideacard>
                    @endforeach
                </ul>
            </div>
        @else

        <p class="text-3xl font-bold mb-6 text-center">No Ideas Yet</p>
                
        @endif

        <a href="/ideas/create" class="btn btn-primary mt-4">Create New Idea</a>

    </div>
    
</x-layout>