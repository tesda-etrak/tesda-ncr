@section('title', 'Regional/District Offices | TESDA-NCR')

@section('contactsTitle', 'Regional/District Offices')

<x-contacts>
    <h2 class="text-3xl font-bold">
        <span class="border-b-4 border-black">National Capital Region (NCR) - Regional Office</span>
    </h2>
    <div class="text-black text-xl border-l-4 border-blue-700 px-4 py-2 space-y-0.5">
        <p class="text-blue-700 font-semibold">{{ $roContact->affiliation }}</p>
        <p class="font-medium uppercase">{{ $roContact->name }}</p>
        <p class="italic">{{ $roContact->position }}</p>
        <div class="address">
            <span class="font-bold">Address: </span>
            <span>{{ $roContact->address }}</span>
        </div>
        <div class="telephone-number">
            <span class="font-bold">Tel. No: </span>
            <span>{{ $roContact->telephone_number }}</span>
        </div>
        <div class="fax-number">
            <span class="font-bold">Fax. No: </span>
            <span>{{ $roContact->fax_number }}</span>
        </div>
        <div class="email">
            <span class="font-bold">Email: </span>
            <a href="mailto:{{ $roContact->email }}">
                <span class="text-blue-700 underline">{{ $roContact->email }}</span>
            </a>
        </div>
    </div>
    <h2 class="text-3xl font-bold">
        <span class="border-b-4 border-black">National Capital Region (NCR) - District Office</span>
    </h2>
    @foreach ($doContacts as $contact)
        <div class="text-black text-xl border-l-4 border-blue-700 px-4 py-2 space-y-0.5">
            <p class="text-blue-700 font-semibold">{{ $contact->affiliation }}</p>
            <p class="font-medium uppercase">{{ $contact->name }}</p>
            <p class="italic">{{ $contact->position }}</p>
            <div class="address">
                <span class="font-bold">Address: </span>
                <span>{{ $contact->address }}</span>
            </div>
            <div class="telephone-number">
                <span class="font-bold">Tel. No: </span>
                <span>{{ $contact->telephone_number }}</span>
            </div>
            <div class="fax-number">
                <span class="font-bold">Fax. No: </span>
                <span class="hidden">{{ $contact->fax_number }}</span>
            </div>
            <div class="email">
                <span class="font-bold">Email: </span>
                <a href="mailto:{{ $contact->email }}">
                    <span class="text-blue-700 underline">{{ $contact->email }}</span>
                </a>
            </div>
        </div>
    @endforeach
</x-contacts>