@extends('layout')

@section('content')
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12 rounded-lg">
        <div class="mx-auto max-w-screen-2xl p-4 md:p-8">
            <a href="/"
                class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-primary-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Back</a>
            <section class="flex flex-col justify-between gap-6 sm:gap-10 md:gap-16 lg:flex-row">
 
                <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-5/12 xl:py-24">

                    <p class="mb-4 font-semibold text-primary md:mb-6 md:text-lg xl:text-xl">{{ $listing['ingredients'] }}
                    </p>
                    <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl"> {{ $listing['title'] }}
                    </h1>

                    <p class="mb-8 leading-relaxed text-gray-500 lg:w-4/5 xl:text-lg">{{ $listing['description'] }}
                    </p>
                    <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg"><span class="text-primary font-semibold">Proportions:</span> {{ $listing['proportions'] }}
                    </p>
                    <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
                        @include('partials._search')
                    </div>
                </div>

                <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
                    <img src=" {{ $listing['image'] }}" loading="lazy" alt="Photo of {{ $listing['title'] }}"
                        class="h-full w-full object-cover object-center" />
                </div>

            </section>
        </div>
    </div>
@endsection
