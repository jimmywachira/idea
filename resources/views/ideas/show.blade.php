<x-layout>
    <div class="card bg-neutral p-4 text-neutral-content max-w-4xl mx-auto mt-12 mb-24">
       <h1 class="text-3xl mt-2 text-center font-bold mb-6">your Idea</h1>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
            <h1 class="bg-gray-700 m-2 p-4 rounded-md">{{ $idea->description }}</h1>
        </div>
        
        <div class="max-w-3xl flex mx-auto px-4 sm:px-6 lg:px-8 pb-12">
            <a href="/ideas/{{ $idea->id }}/edit" class="bg-blue-600 flex-item hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md mr-4">Edit Idea</a>
        </div>
    </div>
</x-layout>