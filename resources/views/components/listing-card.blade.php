@props(["listing"])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/no-image.png"
            alt="{{asset("/public/images/logo.png")}}"
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :listing="$listing" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>