<x-layout>
    <form action="/login" method="POST" class="space-y-6">
        @csrf
        <fieldset class="fieldset bg-base-200 text-white border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend bg-base-400 text-2xl">Login</legend>

            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required />
            <x-forms.error name="email" />

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required />
            <x-forms.error name="password" />
            <button class="btn btn-neutral mt-4">login</button>
        </fieldset>
    </form>
</x-layout>