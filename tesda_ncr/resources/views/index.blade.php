@section('title', 'Home | TESDA-NCR')

<x-layout>
    <section class="relative flex h-[960px] items-center justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gray-800/80"></div>
        <div class="mt-1 sm:mt-24 space-y-5 z-10">
            <div class="flex items-center justify-center sm:hidden">
                <img src="{{ asset('images/logos/tesda.webp') }}" alt="TESDA-NCR Logo" class="w-3xs rounded-2xl">
            </div>
            <div class="flex items-center justify-center space-x-5">
                <img src="{{ asset('images/logos/tesda.webp') }}" alt="TESDA-NCR Logo" class="hidden sm:block w-3xs rounded-2xl">
                <div class="text-white text-stroke-blue text-center sm:text-start break-words space-y-4 uppercase w-full sm:w-1/2 whitespace-normal">
                    <h1 class="text-5xl font-[FremontBold,Verdana]">Technical Education and Skills Development Authority</h1>
                    <h3 class="text-2xl font-sans font-bold">National Capital Region</h3>
                    <div class="flex items-start justify-center sm:justify-start space-x-3">
                        <div class="text-white hover:text-blue-500 transition-colors duration-200 w-fit">
                            <a href="http://www.facebook.com/tesdancr1/" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" fill="currentColor" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="text-white hover:text-red-500 transition-colors duration-200 w-fit">
                            <a href="https://www.youtube.com/@TESDAOfficial" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="55" height="55" fill="currentColor" viewBox="0 0 50 50">
                                    <path d="M 44.898438 14.5 C 44.5 12.300781 42.601563 10.699219 40.398438 10.199219 C 37.101563 9.5 31 9 24.398438 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.398438 17 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.898438 40.5 17.898438 41 24.5 41 C 31.101563 41 37.101563 40.5 40.601563 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.101563 35.5 C 45.5 33 46 29.398438 46.101563 25 C 45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32 L 19 18 L 31.199219 25 Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center sm:my-36">
                <div class="flex items-center justify-center text-center py-6 rounded-2xl space-x-10 sm:space-x-60 w-full sm:w-3/4">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/logos/kayang-kaya.png') }}" alt="Kayang-Kaya Logo" class="w-32 sm:w-56 object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/logos/bagong-pilipinas.png') }}" alt="Bagong Pilipinas Logo" class="w-24 sm:w-48 object-contain">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/logos/dpo-dps-2025.png') }}" alt="DPS Registration Seal 2025" class="w-24 sm:w-48 object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="flex sm:flex-col items-center justify-center h-full relative z-10">
            <div class="space-y-8 w-full sm:hidden">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/transparency-seal.png') }}" alt="Philippine Transparency Seal Logo" class="w-28 object-contain">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/dole.png') }}" alt="DOLE Logo" class="w-28 object-contain">
                </div>
            </div>
            <div class="space-y-8 w-full sm:hidden">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/foi.png') }}" alt="FOI Philippines Logo" class="w-40 object-contain">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/pqf.png') }}" alt="Philippine Qualitifications Framework Logo" class="w-24 object-contain">
                </div>
            </div>
            <div class="hidden sm:flex items-center justify-center text-center py-6 rounded-2xl space-x-60 w-3/4">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/transparency-seal.png') }}" alt="Philippine Transparency Seal Logo" class="w-64 object-contain">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/dole.png') }}" alt="DOLE Logo" class="w-72 object-contain">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/foi.png') }}" alt="FOI Philippines Logo" class="w-96 object-contain">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/logos/pqf.png') }}" alt="Philippine Qualitifications Framework Logo" class="w-60 object-contain">
                </div>
            </div>
        </div>
    </section>
    <div class="bg-blue-700 flex items-center justify-center p-10">
        <h1 class="text-white text-center text-4xl font-bold font-sans">We measure our worth by the satisfaction of the customers we serve.</h1>
    </div>
    <section class="bg-white min-h-screen pl-24 pr-16 py-16 z-10">
        <div class="space-y-20">
            <div class="flex items-center justify-center">
                <div class="fb-video" 
                    data-href="https://www.facebook.com/TESDAOfficial/videos/3808930295931226/?t=1" 
                    data-width="700" 
                    data-show-text="false">
                </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="text-center space-y-8 w-4xl">
                    <div>
                        <h2 class="text-blue-800 text-5xl font-[FremontBold,Verdana] font-bold mb-5 uppercase">Vision</h2>
                        <p class="text-gray-700 text-2xl leading-relaxed">
                            The transformational leader in the technical education and skills development of the Filipino workforce.
                        </p>
                    </div>
                    <div>
                        <h2 class="text-blue-800 text-5xl font-[FremontBold,Verdana] font-bold mb-5 uppercase">Mission</h2>
                        <p class="text-gray-700 text-2xl leading-relaxed">
                            TESDA sets direction, promulgates relevant standards, and implements programs geared towards quality assured and inclusive technical education 
                            and skills development and certification system.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-blue-100 flex items-center justify-center py-6">
        <div class="text-center space-y-8 w-4xl">
            <div>
                <h2 class="text-blue-800 text-4xl font-sans font-bold mb-1 uppercase">Data Privacy Notice</h2>
                <p class="text-gray-700 text-2xl leading-relaxed">(Compliance to DPA of 2012, RA 10173)</p>
            </div>
        </div>
    </div>
    <section class="bg-blue-700 text-white flex items-center justify-center space-x-10">
        <div class="py-10 w-xl">
            <img src="{{ asset('images/logos/tesda-transparent.png') }}" alt="National TESD Plan 2023-2028" class="w-fit h-auto">
        </div>
        <div class="py-10 text-xl w-xl">
            <p class="mb-8">Building 15, Gate 2, TESDA Complex, East Service Road, South Luzon Expressway, Fort Bonifacio, Taguig City, 1630</p>
            <div class="telephone-number">
                <span>Tel. No.: </span>
                <span>8810-2540 / 8240-5016</span>
            </div>
            <div class="email">
                <span>EMAIL: </span>
                <span>ncr@tesda.gov.ph</span>
            </div>
        </div>
    </section>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0">
    </script>
</x-layout>