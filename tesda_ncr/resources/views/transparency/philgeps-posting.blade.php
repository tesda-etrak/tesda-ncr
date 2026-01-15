@section('title', 'PhilGEPS Posting | TESDA-NCR')

<x-layout>
    <section class="relative h-[200px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">PhilGEPS Posting</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="w-full h-[calc(75vh-4rem)]">
                <div class="text-gray-700 text-xl font-semibold leading-relaxed space-y-4">
                    <div>
                        <a href="https://www.tesda.gov.ph/About/TESDA/27868" target="_blank" rel="noopener noreferrer">
                            <span class="hover:text-blue-600 hover:underline">Competitive Bidding</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.tesda.gov.ph/About/TESDA/27869" target="_blank" rel="noopener noreferrer">
                            <span class="hover:text-blue-600 hover:underline">Other Alternative Methods of Procurement</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.ps-philgeps.gov.ph/welcome/" target="_blank" rel="noopener noreferrer">
                            <span class="hover:text-blue-600 hover:underline">Visit Procurement Service - PhilGEPS website</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>