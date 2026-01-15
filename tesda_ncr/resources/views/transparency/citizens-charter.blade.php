@section('title', 'Citizen\'s Charter | TESDA-NCR')

<x-layout>
    <section class="relative h-[200px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">Citizen's Charter</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-semibold leading-relaxed w-full h-[calc(75vh-4rem)] space-y-4">
                <div>
                    <a href="https://www.tesda.gov.ph/Uploads/File/GOOD%20GOVERNANCE/2025/TESDA%20Citizens%20Charter%20CY%202025%20(First%20Edition).pdf" target="_blank" rel="noopener noreferrer">
                        <span class="hover:text-blue-600 hover:underline">Citizen's Charter</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.tesda.gov.ph/Uploads/File/GOOD%20GOVERNANCE/2025/Certificate%20of%20Compliance%20CY%202025.pdf" target="_blank" rel="noopener noreferrer">
                        <span class="hover:text-blue-600 hover:underline">Certificate of Compliance</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>