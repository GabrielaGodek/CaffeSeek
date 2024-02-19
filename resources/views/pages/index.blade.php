<x-layout>
    @include('partials._hero')
    <section>
        <div class=" py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-lg px-4 md:px-8">
                <div class="mb-8 md:mb-12">
                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Our Team by
                        the numbers</h2>

                    <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of
                        some simple filler text, also known as placeholder text. It shares some characteristics of a
                        real written text but is random or otherwise generated.</p>
                </div>

                <div class="grid grid-cols-2 gap-6 rounded-lg bg-primary p-6 md:grid-cols-4 md:gap-8 md:p-8">
                    <x-feature value="200" description="People" />
                    <x-feature value="500+" description="People" />
                    <x-feature value="1000+" description="Customers" />
                    <x-feature value="A couple" description="Coffee breaks" />
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-6 sm:py-8 lg:py-12 rounded-lg all-products">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Find your best</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple
                    filler text, also known as placeholder text. It shares some characteristics of a real written text but
                    is random or otherwise generated.</p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
                @foreach ($listings as $listing)
                    <x-card :listing="$listing"></x-card>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>
