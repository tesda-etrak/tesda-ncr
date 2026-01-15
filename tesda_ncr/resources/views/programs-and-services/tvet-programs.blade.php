@section('title', 'TVET Programs | TESDA-NCR')

<x-layout>
    <section class="relative h-[200px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">TVET Programs</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <div class="p-6 sm:px-60 sm:py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl text-justify font-sans leading-relaxed w-full space-y-5">
                <p>
                    In view of the need to provide equitable access and provision of TESD programs to the growing TVET clients, 
                    TESDA continues to undertake direct training provisions. There are four training modalities school-based, center-based, enterprised-based 
                    and community-based. These are being done with TESDA’s infrastructure in place – 57 TESDA administered schools, 60 training center, 
                    enterprised-based training through DTS/apprenticeship and community-based training in convergence with the LGU’s.
                </p>
                <ul class="list-disc list-inside space-y-2">
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/35" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">School Based Program</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/36" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Centre Based Program</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/37" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Community Based Program</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tesda.gov.ph/About/TESDA/38" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Enterprise Based Program</span>
                        </a>
                    </li>
                </ul>
                <div class="space-y-4">
                    <span class="font-semibold uppercase">TESDA Supports Training Provision</span>
                    <p>
                        TESD creates opportunities for people to be responsible and become productive citizens. The need to provide and make accessible relevant 
                        TESD compels TESDA to undertake direct training activities at the same time support training activities undertaken by other key players 
                        in the TESD sector.
                    </p>
                    <p>
                        TESDA Technology Institutions are composed of 125 schools, regional, provincial and specialized training centers nationwide which undertake 
                        direct training activities for TESDA. The absence of an institution in the area which can provide people equitable access to TESD necessitates 
                        TESDA to undertake direct training activities. These TTIs also serve as venues to test new training schemes and are used as laboratories 
                        for new technology.
                    </p>
                    <p>Among TESDA’s specialized training centers are the following: </p>
                    <p>
                        <strong>TESDA Women’s Center (TWC)</strong> seeks to advance the economic status of women through training, entrepreneurship development, 
                        gender sensitive policies, programs and projects and research and advocacy. It was established through a grant from the Government of Japan.
                    </p>
                    <p>
                        <strong>Language Skills Institute (LSI)</strong> serves as TESDA’s facility for language programs specifically for workers intending to work abroad. 
                        The LSI conducts training on workplacecommunication on the language of the country of the worker’s destination. There are 35 LSI nationwide 
                        offering different language courses which include English, Korean, Mandarin, Japanese and Spanish.
                    </p>
                    <p>
                        <strong>Korea-Philippines IT Training Centers</strong> are grant-assisted projects from the Government of the Republic of Korea. 
                        These KPITTCs are located at the Polytechnic University in Novaliches, Quezon City and at the Regional Skills Development Centers 
                        in Guiguinto, Bulacan and Tibungco, Davao City, respectively.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>