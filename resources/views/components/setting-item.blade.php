@props(['link', 'content'])

<li class="font-semibold mb-2">
    <a href="{{$link}}"
        class="{{request()->is(substr($link, 1)) ? 'text-blue-500' : ''}}">{{ucwords($content)}}</a>
</li>