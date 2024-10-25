<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Event Details') }}
            </h2>
            <a href="{{ route('admin.event.index') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Back to Events
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                <div class="item-card flex flex-row justify-between items-start border-b border-gray-200 py-4">
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">Organizer</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->organizer->organizer_name }}</h3> {{-- Nama Organizer --}}
                    </div>
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">Event Name</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->event_name }}</h3> {{-- Nama Event --}}
                    </div>
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">About</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->about }}</h3> {{-- Deskripsi Event --}}
                    </div>
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">Speaker</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->speaker }}</h3> {{-- Nama Pembicara --}}
                    </div>
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">Date</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->event_date }}</h3> {{-- Tanggal Event --}}
                    </div>
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">Time</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->event_time }}</h3> {{-- Waktu Event --}}
                    </div>
                    <div class="flex flex-col flex-1 mx-2">
                        <p class="text-slate-500 text-sm">Location</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $event->location }}</h3> {{-- Lokasi Event --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
