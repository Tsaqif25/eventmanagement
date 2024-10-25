<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Event') }}
            </h2>
            <a href="{{ route('admin.ticket.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 flex flex-col gap-y-6">
                <!-- Loop through tickets -->
                @forelse ($tickets as $ticket)
                    <div class="item-card flex flex-col md:flex-row justify-between items-start md:items-center border-b border-gray-200 py-6">
                        
                        <!-- Ticket Availability -->
                        <div class="flex flex-col w-full md:w-1/6 mb-4 md:mb-0">
                            <p class="text-slate-500 text-sm">Jumlah Tiket</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $ticket->availability }}</h3>
                        </div>

                        <!-- Event Name -->
                        <div class="flex flex-col w-full md:w-1/3 mb-4 md:mb-0">
                            <p class="text-slate-500 text-sm">Event Name</p>
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{ $ticket->event ? $ticket->event->event_name : 'Event not found' }}
                            </h3>
                        </div>

                        <!-- Ticket Price -->
                        <div class="flex flex-col w-full md:w-1/4 mb-4 md:mb-0">
                            <p class="text-slate-500 text-sm">Jumlah Pembayaran</p>
                            <h3 class="text-indigo-950 text-xl font-bold">Rp {{ number_format($ticket->price, 2, ',', '.') }}</h3>
                        </div>

                        <!-- Actions (Edit/Delete) -->
                        <div class="flex flex-row gap-3 w-full md:w-1/4">
                            <a href="{{ route('admin.ticket.edit', $ticket->id) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.ticket.destroy', $ticket->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full hover:bg-red-800 transition ease-in-out duration-200" onclick="return confirm('Are you sure you want to delete this ticket?');">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">No tickets available at the moment.</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $tickets->links() }} <!-- Pagination links -->
            </div>
        </div>
    </div>
</x-app-layout>
