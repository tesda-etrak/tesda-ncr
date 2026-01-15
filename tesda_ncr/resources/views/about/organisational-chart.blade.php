@section('title', 'Organizational Chart | TESDA-NCR')

<x-layout>
    <section class="relative h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">TESDA-NCR Organizational Chart</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="flex mx-auto py-12 overflow-y-auto">
            <img src="{{ asset('images/organizational-chart.png') }}" alt="TESDA-NCR Organizational Chart" class="w-full h-auto">
        </div>
    </section>
</x-layout>