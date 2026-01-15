@section('title', 'Unavailable | TESDA-NCR')

<x-layout>
    <section class="relative h-[200px] sm:h-[270px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-10 my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">Unavailable</span>
            </div>
        </div>
    </section>
    <section class="flex items-center justify-center w-full">
        <div class="flex p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p>The link has no available material attached.</p>
            </div>
        </div>
    </section>
</x-layout>