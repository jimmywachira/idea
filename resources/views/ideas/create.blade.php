<x-layout>
        <div class="card p-4 max-w-4xl mx-auto mt-12 mb-24">
        
            <form action="/ideas" method="POST" class="space-y-4">
            @csrf
            <div class="col-span-full p-2">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="block w-full p-2 border-2 rounded-md m-2" required placeholder="What's your idea?"></textarea>
                <x-forms.error name="description" />
                </div>

                <div class="mt-2 p-2"> 
                <label for="status" name="status" class="block w-full p-2">Status</label>
                <input type="text" id="status" name="status" 
                class="block w-full p-2 border-2 rounded-md" placeholder="e.g., pending, in-progress, done">
                <x-forms.error name="status" />
                </div>
                
                <div class="mt-2">
                <p class="">Be as detailed as possible to help others understand your idea.</p>
                </div>
                <div class="mt-4 flex items-center justify-end gap-x-6">
                <button class="btn btn-primary" type="submit">save idea</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>