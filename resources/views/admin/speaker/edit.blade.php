<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Speaker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg"> 
                <form method="POST" action="{{ route('admin.speaker.update', $speaker->id) }}" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="speaker_name" :value="__('Nama Pembicara')" />
                        <x-text-input id="speaker_name" class="block mt-1 w-full" type="text" name="speaker_name" 
                            value="{{ old('speaker_name', $speaker->speaker_name) }}" required autofocus autocomplete="speaker_name" />
                        <x-input-error :messages="$errors->get('speaker_name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bio" :value="__('Bio Singkat')" />
                        <x-text-input id="bio" class="block mt-1 w-full" type="text" name="bio" 
                            value="{{ old('bio', $speaker->bio) }}" required autocomplete="bio" />
                        <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="contact_info" :value="__('Contact Info')" />
                        <x-text-input id="contact_info" class="block mt-1 w-full" type="text" name="contact_info" 
                            value="{{ old('contact_info', $speaker->contact_info) }}" required autocomplete="contact_info" />
                        <x-input-error :messages="$errors->get('contact_info')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Speaker
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
