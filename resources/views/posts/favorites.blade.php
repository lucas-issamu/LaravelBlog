<x-layout>
    @if ($favorite->all()->where('user_id', auth()->user()->id)->count())
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($favorite->all()->where('user_id', auth()->user()->id) as $favorite)
        <x-post-card :post="$favorite->post" class="col-span-2"/>
        @endforeach
    </div>
    @else
    <p class="mt-16 text-center">There's no favorited posts.</p>
    @endif
</x-layout>