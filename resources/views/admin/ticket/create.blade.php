<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Ticket') }}
            </h2>
            <a href="{{ route('admin.ticket.index') }}" class="font-bold py-4 px-6 bg-gray-700 text-white rounded-full">
                Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                <!-- Pesan Error -->
                @if ($errors->any())
                    <div class="bg-red-100 text-red-600 p-4 rounded-lg mb-6">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('admin.ticket.store') }}" method="POST">
                    @csrf

                    <div class="flex flex-col gap-y-5">
                        <!-- Ticket Availability -->
                        <div>
                            <label for="availability" class="text-slate-500 text-sm">Ticket Availability</label>
                            <input type="number" name="availability" id="availability" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                        </div>

                        <!-- Event Name Dropdown -->
                        <div>
                            <label for="event_id" class="text-slate-500 text-sm">Event Name</label>
                            <select name="event_id" id="event_id" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>
                                <option value="">Select Event</option>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Ticket Price -->
                        <div>
                            <label for="price" class="text-slate-500 text-sm">Price (in Rp)</label>
                            <input type="number" name="price" id="price" class="border border-gray-300 rounded-lg px-4 py-2 w-full" step="0.01" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Add Ticket
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
