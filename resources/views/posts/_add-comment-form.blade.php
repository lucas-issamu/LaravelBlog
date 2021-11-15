@auth
<x-panel>
    <form method="POST" action="/posts/{{$post->slug}}/comments">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/45?u{{auth()->id()}}" alt="User_Avatar" class="rounded-full">
            <h2 class="ml-3">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                placeholder="Write your comment here..." required></textarea>
            <x-form.error name="body"/>
        </div>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
           <x-form.submit>post</x-submit-button>
        </div>
    </form>
</x-panel>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline text-blue-500">Register</a>
    or <a href="/login" class="hover:underline text-blue-500">Log In</a> to leave a comment.
</p>
@endauth