<x-layout title="Contact Us">
    <!-- Header Section -->
    {{-- <x-layouts.header /> --}}

    <div class="max-w-4xl mx-auto px-4 py-12">
        <!-- About Us Section -->
        <div class="mb-12 text-center border-b border-gray-200 pb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">About Our Team</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">
                We are a dedicated group of developers, designers, and tech enthusiasts passionate about building the future of the web. Our mission is to share knowledge, foster innovation, and support the developer community through high-quality content and open collaboration. We believe that great software is built by great teams, and we are here to help you on your journey.
            </p>
        </div>

         <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h1>
            <p class="text-lg text-gray-600">Have a question or feedback? We'd love to hear from you!</p>
        </div>

        <!-- Livewire Contact Form -->
        <div>
    <!-- Success Message -->
    @if ($success)
        <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
            <div class="flex">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span>Thank you for your message! We will get back to you soon.</span>
            </div>
        </div>
    @endif

    <!-- Contact Form -->
    <div class="bg-white/50 shadow-lg rounded-lg p-8">
        <form wire:submit="submit" class="space-y-6">
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-gray-700 mb-2">
                    Name <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="name" 
                    wire:model="name"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                    placeholder="Enter your full name"
                >
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-gray-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input 
                    type="email" 
                    id="email" 
                    wire:model="email"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                    placeholder="your.email@example.com"
                >
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Subject Field -->
            <div>
                <label for="subject" class="block text-gray-700 mb-2">
                    Subject <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="subject" 
                    wire:model="subject"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('subject') border-red-500 @enderror"
                    placeholder="What is this about?"
                >
                @error('subject')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Message Field -->
            <div>
                <label for="message" class="block text-gray-700 mb-2">
                    Message <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="message" 
                    wire:model="message"
                    rows="6"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('message') border-red-500 @enderror"
                    placeholder="Tell us what's on your mind..."
                ></textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove>Send Message</span>
                    <span wire:loading>Sending...</span>
                </button>
            </div>
        </form>
    </div>
</div>


    </div>
</x-layout>