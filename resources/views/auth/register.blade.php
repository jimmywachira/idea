<x-layout>
    <form action="/register" method="POST" class="space-y-6">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend bg-base-400 text-2xl">Register</legend>

            <label class="label">Name</label>
            <input type="text" name="name" class="input" placeholder="Name" required />
            <x-forms.error name="name" />
            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required />
            <x-forms.error name="email" />

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required />
            <x-forms.error name="password" />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>