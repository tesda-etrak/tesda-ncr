@section('title', 'TESDA Committee on Anti-Red Tape (CART) | TESDA-NCR')

<x-layout>
    <section class="relative h-[240px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">TESDA Committee on Anti-Red Tape (CART)</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="flex mx-auto py-12 overflow-y-auto">
            <div class="w-full space-y-8">
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/updated-tesda-cart.png') }}" alt="Updated TESDA Committee on Anti-Red Tape">
                </div>
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/rtc-arta-focal-1.png') }}" alt="Regional Training Center Arta Focal">
                </div>
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/rtc-arta-focal-2.png') }}" alt="Regional Training Center Arta Focal">
                </div>
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/regional-arta-focal.png') }}" alt="Regional Arta Focal">
                </div>
            </div>
        </div>
    </section>
</x-layout>