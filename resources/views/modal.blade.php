<x-layout title="Idea Modal Blueprint">
    <header class="max-w-5xl mx-auto text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">The Idea Modal Blueprint</h1>
        <p class="text-lg text-gray-600">Explaining the "All-in-One" Create & Edit Lifecycle</p>
    </header>

    <main class="max-w-5xl mx-auto space-y-12">

        <section>
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                <span class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm">1</span>
                State Management (Alpine.js)
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flow-card bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <h3 class="font-bold text-blue-600 mb-2">Create Mode</h3>
                    <p class="text-sm text-gray-500 mb-4">Default state when the modal opens via "Add New".</p>
                    <ul class="text-sm space-y-2">
                        <li>✅ <code>isEdit = false</code></li>
                        <li>✅ <code>action = /ideas</code> (POST)</li>
                        <li>✅ <code>reset()</code> clears all inputs</li>
                    </ul>
                </div>
                <div class="flow-card bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <h3 class="font-bold text-purple-600 mb-2">Edit Mode</h3>
                    <p class="text-sm text-gray-500 mb-4">Triggered by the <code>receiveEvent</code> function.</p>
                    <ul class="text-sm space-y-2">
                        <li>✅ <code>isEdit = true</code></li>
                        <li>✅ <code>action = /ideas/{id}</code> (PUT)</li>
                        <li>✅ Inputs populated with <code>detail.idea</code></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="bg-blue-900 text-white rounded-3xl p-8 shadow-xl">
            <h2 class="text-2xl font-bold mb-8 text-center">How the Data Flows</h2>
            
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center w-full md:w-1/4">
                    <div class="bg-blue-700 w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-4 text-2xl">📡</div>
                    <h4 class="font-bold">Broadcast</h4>
                    <p class="text-xs text-blue-200">Edit Button clicks and dispatches <code>open-idea-form</code></p>
                </div>

                <div class="hidden md:block text-2xl">➡️</div>

                <div class="text-center w-full md:w-1/4">
                    <div class="bg-blue-700 w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-4 text-2xl">📥</div>
                    <h4 class="font-bold">Capture</h4>
                    <p class="text-xs text-blue-200"><code>receiveEvent()</code> catches the data & maps steps/links</p>
                </div>

                <div class="hidden md:block text-2xl">➡️</div>

                <div class="text-center w-full md:w-1/4">
                    <div class="bg-blue-700 w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-4 text-2xl">🔄</div>
                    <h4 class="font-bold">Spoofing</h4>
                    <p class="text-xs text-blue-200">Laravel sees <code>_method="PUT"</code> injected by Alpine</p>
                </div>

                <div class="hidden md:block text-2xl">➡️</div>

                <div class="text-center w-full md:w-1/4">
                    <div class="bg-green-500 w-16 h-16 rounded-full mx-auto flex items-center justify-center mb-4 text-2xl">💾</div>
                    <h4 class="font-bold">Persistence</h4>
                    <p class="text-xs text-blue-200">Controller validates and saves to DB</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-6">Technical Highlights</h2>
            <div class="space-y-4">
                <div class="logic-gate p-4 rounded-r-lg">
                    <span class=" text-blue-700 font-bold">isSubmitting</span>
                    <p class="text-sm mt-1">Prevents "Double-Taps." Once clicked, the buttons disable and text changes (e.g., "Updating..."), protecting your database from duplicate entries.</p>
                </div>
                <div class="logic-gate p-4 rounded-r-lg">
                    <span class=" text-blue-700 font-bold">Dynamic Arrays (links[] / steps[])</span>
                    <p class="text-sm mt-1">The <code>x-for</code> loop handles the UI, while the <code>name="steps[]"</code> handles the PHP array. This bridge allows unlimited items to be sent in one request.</p>
                </div>
                <div class="logic-gate p-4 rounded-r-lg">
                    <span class=" text-blue-700 font-bold">The init() Watcher</span>
                    <p class="text-sm mt-1">Automatically switches the form URL. You don't have to manually code the logic to change the route—Alpine "watches" the mode and does it for you.</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="mt-20 text-center text-gray-400 text-sm border-t pt-8">
        Built for the Rental Management System Architecture
    </footer>

</x-layout>