<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Events') }}
            </h2>
            <a href="{{ route('admin.event.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse($events as $event) {{-- Menggunakan $events untuk iterasi --}}
                    <div class="item-card flex flex-row justify-between items-start border-b border-gray-200 py-4">
                        {{-- <div class="flex flex-col flex-1 mx-2">
                            <p class="text-slate-500 text-sm">Organizer</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $event->organizer->organizer_name }}</h3> {{-- Nama Organizer --}}
                        {{-- </div> --}} 
                        <div class="flex flex-col flex-1 mx-2">
                            <p class="text-slate-500 text-sm">Event Name</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $event->event_name }}</h3> {{-- Nama Event --}}
                        </div>
                        {{-- <div class="flex flex-col flex-1 mx-2">
                            <p class="text-slate-500 text-sm">About</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $event->about }}</h3> {{-- Deskripsi Event --}}
                        {{-- </div> --}} 
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
                        {{-- <div class="flex flex-col flex-1 mx-2">
                            <p class="text-slate-500 text-sm">Location</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $event->location }}</h3> {{-- Lokasi Event --}}
                        {{-- </div> --}} 
                        <div class="flex flex-row items-center gap-x-3 mx-2">

                            <a href="{{ route('admin.event.show', $event) }}" class="font-bold py-4 px-6 bg-green-600 text-white rounded-full">
                                Details
                            </a>
                            
                            <a href="{{ route('admin.event.edit', $event) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.event.destroy', $event) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Event Tidak Tersedia</p>
                @endforelse
            </div>
            
        </div>
    </div>
</x-app-layout>
