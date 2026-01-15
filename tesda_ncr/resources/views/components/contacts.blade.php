@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout>
    <section class="relative h-[240px] sm:h-[300px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-auto my-20 sm:mx-32 sm:my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-4xl sm:text-6xl font-bold uppercase">@yield('contactsTitle', 'Contacts')</span>
            </div>
        </div>
    </section>
    <section class="flex relative w-full">
        <aside class="hidden sm:flex flex-col bg-blue-100 group left-0 shadow-md w-72 z-10">
            <div class="px-6 py-10">
                <h3 class="text-lg font-bold uppercase">Contacts</h3>
                <ul class="flex-1 overflow-y-auto space-y-8 pr-4 py-7">
                    <li>
                        <a href="{{ route('regional-district.offices') }}" 
                        class="text-gray-700 hover:text-white hover:bg-sky-500 flex items-center p-2 rounded-md space-x-3">
                            Regional/District Offices
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('technology.institute') }}" 
                        class="text-gray-700 hover:text-white hover:bg-sky-500 flex items-center p-2 rounded-md space-x-3">
                            Technology Institute
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="flex flex-1 p-6 sm:px-16 sm:py-12 overflow-y-auto">
            <div class="w-full h-fit space-y-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layout>