@extends('layout')
@section('content')
    @include('partials._hero')
    <div class="bg-white py-6 sm:py-8 lg:py-12 rounded-lg">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Find your best</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple
                    filler text, also known as placeholder text. It shares some characteristics of a real written text but
                    is random or otherwise generated.</p>
            </div>
            <!-- text - end -->

            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
                @foreach ($listings as $listing)
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
                                @php
                                    $ingredients = explode(',', $listing['ingredients']);
                                @endphp
                                @foreach ($ingredients as $ingredient)
                                    <span
                                        class="rounded px-2 py-1 text-xs text-black bg-bg_second hover:bg-primary transition duration-100 hover:text-white">{{ $ingredient }}</span>
                                @endforeach
                            </div>
                            <div class="mt-auto flex items-end justify-end">
                                <a href="/listing/{{ $listing['id'] }}"
                                    class="inline-block flex gap-2 rounded-lg bg-detail px-6 py-2 text-center text-xs font-semibold text-white transition-all duration-100 hover:bg-detail_second hover:tracking-widest focus-visible:ring md:text-sm">Details
                                    <img src="{{ asset('right-arrow.png') }}" width="15" alt="See details"></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
