<x-layout>
    <div class="card p-4 max-w-4xl mx-auto mt-12 mb-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="font-bold mb-6">Edit Your Idea</h1>
        </div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
            <form method="POST" action="/ideas/{{ $idea->id }}">
                @csrf
                @method('PATCH') <!-- method spoofing -->
                
                <div class="col-span-full p-2">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="block w-full border-blue-700 p-2 border-2 rounded-md m-2" required>{{ $idea->description }}</textarea>
                <x-forms.error name="description" />
                </div>

                <div class="mt-2 p-2"> 
                <label for="status" name="status" class="block w-full p-2">Status</label>
                <input type="text" id="status" name="status" value="{{ $idea->status }}"
                class="block w-full border-blue-700 p-2 border-2 rounded-md" placeholder="e.g., pending, in-progress, done">
                <x-forms.error name="status" />
                </div>
                
               </div>

                <div class="mt-2 flex items-center justify-end gap-x-6">
                <a href="/ideas" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="submit" form="delete-form" class="btn btn-error">Delete</button>
                </div>
            </form>

            <form method="POST" action="/ideas/{{ $idea->id }}" id="delete-form">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</x-layout>