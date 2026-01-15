@section('title', 'Downloadable Files | TESDA-NCR')

<x-layout>
    <section class="relative h-[200px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">Downloadable Files</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full h-[calc(70vh-4rem)] space-y-5">
                <ul class="list-disc list-inside space-y-2">
                    <li>
                        <a href="https://www.tesda.gov.ph/Download/Training_Regulations?Searchcat=Training%20Regulations" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Training Regulations</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/Download/Self_Assessment?Searchcat=Self-Assessment+Guides" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Self-Assessment Guides</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/Uploads/File/FORM/TESDA-DPA%20Form%201%20Registration%20Form%20(MIS%2003-01).pdf" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Learner's Profile Form (MIS 03-01 ver.2021)</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/20883" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Basic Competencies Integrated with 21st Century Skills</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/121" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">QMS Prescribed Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/24562" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Star Rated Programs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</x-layout>