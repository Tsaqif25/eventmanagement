<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Participant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.participant.update', $participant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Nama Peserta -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Peserta</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $participant->name) }}" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nama peserta">
                        </div>

                        <!-- Alamat Peserta -->
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Alamat Peserta</label>
                            <input type="text" name="address" id="address" value="{{ old('address', $participant->address) }}" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan alamat peserta">
                        </div>

                        <!-- Nomor HP -->
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                            <input type="tel" name="phone_number" id="phone_number" value="{{ old('phone_number', $participant->phone_number) }}" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nomor HP" pattern="[0-9]*">
                        </div>

                        <!-- Tanggal Daftar -->
                        <div>
                            <label for="registration_date" class="block text-sm font-medium text-gray-700">Tanggal Daftar</label>
                            <input type="date" name="registration_date" id="registration_date" value="{{ old('registration_date', $participant->registration_date) }}" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>

                        <!-- Nama Event -->
                        <div>
                            <label for="event_id" class="block text-sm font-medium text-gray-700">Nama Event</label>
                            <select name="event_id" id="event_id" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}" {{ $participant->event_id == $event->id ? 'selected' : '' }}>
                                        {{ $event->event_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Participant
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
