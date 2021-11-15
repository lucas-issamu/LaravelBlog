<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register</h1>
                <form method="POST" action="/register" class="mt-8">
                    @csrf
                    <x-form.input name="name" />
                    <x-form.error name="name" />

                    <x-form.input name="username" />
                    <x-form.error name="username" />

                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.error name="email" />

                    <x-form.input name="password" type="password" autocomplete="new-password" />
                    <x-form.error name="name" />

                    <x-form.submit>Submit</x-form.submit>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>