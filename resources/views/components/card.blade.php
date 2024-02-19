@props(['listing'])

<div class="flex flex-col overflow-hidden rounded-lg border bg-white">
    <a href="/listing/{{ $listing['id'] }}" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
        <img src="{{ $listing['image'] }}" loading="lazy" alt="Photo by Minh Pham"
            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    </a>

    <div class="flex flex-1 flex-col p-4 sm:p-6">
        <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="#"
                class="transition duration-100 hover:text-detail active:text-indigo-600">{{ $listing['title'] }}</a>
        </h2>
        <div class="flex items-center gap-2 mb-4 ">
           <x-tag :tagsProp="$listing['ingredients']"/>
        </div>
        <div class="mt-auto flex items-end justify-end">
            <a href="/listing/{{ $listing['id'] }}"
                class="inline-block flex gap-2 rounded-lg bg-detail px-6 py-2 text-center text-xs font-semibold text-white transition-all duration-100 hover:bg-detail_second hover:tracking-widest focus-visible:ring md:text-sm">Details
                <img src="{{ asset('right-arrow.png') }}" width="15" alt="See details"></a>
        </div>
    </div>
</div>
