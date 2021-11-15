<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In!</h1>
                <form method="POST" action="/login" class="mt-8">
                    @csrf
                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.error name="email" />

                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.error name="password"/>

                    <x-form.submit>Log In</x-form.submit>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>