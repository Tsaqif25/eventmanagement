<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Events') }}
            </h2>
            <a href="{{ route('admin.organizer.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-6">
            
                <!-- Loop through organizers -->
                @forelse($organizers as $organizer)
                    <div class="item-card flex flex-col md:flex-row justify-between items-start md:items-center border-b border-gray-200 py-6">
                        
                        <!-- Organizer Name -->
                        <div class="flex flex-col w-full md:w-1/4 mb-4 md:mb-0">
                            <p class="text-slate-500 text-sm">Nama Organizer</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $organizer->organizer_name }}</h3>
                        </div>

                        <!-- Contact Info -->
                        <div class="flex flex-col w-full md:w-1/4 mb-4 md:mb-0">
                            <p class="text-slate-500 text-sm">Contact Info</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $organizer->contact_info }}</h3>
                        </div>

                        <!-- Organizer Address -->
                        <div class="flex flex-col w-full md:w-1/4 mb-4 md:mb-0">
                            <p class="text-slate-500 text-sm">Alamat Penyelenggara</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $organizer->address }}</h3>
                        </div>

                        <!-- Edit and Delete Buttons -->
                        <div class="flex flex-row items-center gap-x-3 w-full md:w-auto">
                            <a href="{{ route('admin.organizer.edit', $organizer->id) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.organizer.destroy', $organizer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full" onclick="return confirm('Are you sure you want to delete this organizer?');">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">No organizers found.</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
