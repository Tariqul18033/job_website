@php
    $tags = explode(',', $listing->tags);
@endphp

<ul class="flex">

    @foreach ($tags as $tag)
    <li
        class="bg-black text-white rounded-xl px-3 py-1 mr-2"
    >
        <a href="/?tags={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>