<x-layout>
    <div class="bg-white/80 shadow-md rounded-lg max-w-4xl mx-auto mt-12 mb-24">
        
            <form action="/ideas" method="POST" class="space-y-6">
            @csrf
            <div class="col-span-full p-2">
            
            <label for="description" name="description" class="block w-full bg-white/5 text-gray-700">Your Idea</label>
               <div>
               <div class="mt-2 p-2 m-2"> 
               <textarea id="description" name="description" rows="3" 
                class="text-area w-full @error('description') border-red-500 @enderror" placeholder="What's your idea?"></textarea>
                
                <x-forms.error name="description" />
                </div>
                
                <div class="mt-2 p-2"> 
                <label for="status" name="status" class="block w-full bg-white/5 text-gray-700">Status</label>
                <textarea id="status" name="status" 
                class="text-area block w-full border-blue-700 p-2 border-2 rounded-md" placeholder="e.g., pending, in-progress, done"></textarea>
                <x-forms.error name="status" />
                </div>
               </div>
                
                <div class="mt-2">
                <p class=" text-gray-500">Be as detailed as possible to help others understand your idea.</p>
                </div>
                <div class="mt-4 flex items-center justify-end gap-x-6">
                <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>