<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Event') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data"> 
                    @csrf

                    <!-- Organizer Selection -->
                    <div class="mt-4">
                        <x-input-label for="organizer_id" :value="__('Organizer')" />
                        <select id="organizer_id" name="organizer_id" class="block mt-1 w-full" required>
                            <option value="" disabled selected>Select an organizer</option>
                            @foreach($organizers as $organizer)
                                <option value="{{ $organizer->id }}" {{ old('organizer_id') == $organizer->id ? 'selected' : '' }}>
                                    {{ $organizer->organizer_name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('organizer_id')" class="mt-2" />
                    </div>

                    <!-- Event Name -->
                    <div class="mt-4">
                        <x-input-label for="event_name" :value="__('Event Name')" />
                        <x-text-input id="event_name" class="block mt-1 w-full" type="text" name="event_name" :value="old('event_name')" required />
                        <x-input-error :messages="$errors->get('event_name')" class="mt-2" />
                    </div>

                    <!-- About -->
                    <div class="mt-4">
                        <x-input-label for="about" :value="__('About')" />
                        <x-text-input id="about" class="block mt-1 w-full" type="text" name="about" :value="old('about')" required />
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>

                    <!-- Speaker Selection -->
                    <div class="mt-4">
                        <x-input-label for="speaker" :value="__('Speaker')" />
                        <x-text-input id="speaker" class="block mt-1 w-full" type="text" name="speaker" :value="old('speaker')" required />
                        <x-input-error :messages="$errors->get('speaker')" class="mt-2" />
                    </div>
                    

                    <!-- Date -->
                    <div class="mt-4">
                        <x-input-label for="event_date" :value="__('Date')" />
                        <x-text-input id="event_date" class="block mt-1 w-full" type="date" name="event_date" :value="old('event_date')" required />
                        <x-input-error :messages="$errors->get('event_date')" class="mt-2" />
                    </div>

                    <!-- Time -->
                    <div class="mt-4">
                        <x-input-label for="event_time" :value="__('Time')" />
                        <x-text-input id="event_time" class="block mt-1 w-full" type="time" name="event_time" :value="old('event_time')" required />
                        <x-input-error :messages="$errors->get('event_time')" class="mt-2" />
                    </div>

                    <!-- Location -->
                    <div class="mt-4">
                        <x-input-label for="location" :value="__('Location')" />
                        <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
