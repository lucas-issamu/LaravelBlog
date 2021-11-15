<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Update Account</h1>
                <form method="POST" action="/register/{{$user->username}}" class="mt-8">
                    @csrf
                    @method('PATCH')
                    <x-form.input name="name" :value="old('name', $user->name)" />
                    <x-form.error name="name" />

                    <x-form.input name="username" :value="old('username', $user->username)" />
                    <x-form.error name="username" />

                    <x-form.input name="email" type="email" autocomplete="username" :value="old('email', $user->email)" />
                    <x-form.error name="email" />

                    <x-form.input name="old password" type="password"/>
                    <x-form.error name="old password"/>

                    <x-form.input name="password" type="password" autocomplete="new-password" />
                    <x-form.error name="name" />

                    <x-form.submit>Submit</x-form.submit>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>