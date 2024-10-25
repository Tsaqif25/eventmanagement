<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Event Participants') }}
            </h2>
            <a href="{{ route('admin.participant.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New Participant
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse($participants as $participant)
                    <div class="item-card flex flex-row justify-between items-center">
                        <!-- Nama Peserta -->
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Nama Peserta</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $participant->name }}</h3>
                        </div>
                        <!-- Nomor HP -->
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Nomor HP</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $participant->phone_number }}</h3>
                        </div>
                        <!-- Tanggal Daftar -->
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Tanggal Daftar</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ \Carbon\Carbon::parse($participant->registration_date)->format('d-m-Y') }}</h3>
                        </div>
                        <!-- Event Name -->
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Event Name</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $participant->event ? $participant->event->event_name : 'N/A' }}</h3> <!-- Menampilkan nama event -->
                        </div>
                        <!-- Edit & Delete Buttons -->
                        <div class="hidden md:flex flex-row items-center gap-x-3">
                            <a href="{{ route('admin.participant.edit', $participant->id) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.participant.destroy', $participant->id) }}" method="POST"> 
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full" onclick="return confirm('Yakin ingin menghapus peserta ini?')">
                                    Delete
                                </button>
                            </form> 
                        </div>
                    </div>
                @empty
                    <div class="text-center p-5">
                        <h3 class="text-gray-500 text-lg">Tidak ada peserta yang tersedia.</h3>
                    </div>
                @endforelse
                
                <!-- Pagination Links -->
                <div class="mt-5">
                    {{ $participants->links() }} <!-- Menampilkan pagination -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
