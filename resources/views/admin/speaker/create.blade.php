<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Speaker') }}
            </h2>
            <a href="{{ route('admin.speaker.index') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Back
            </a>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.speaker.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Pembicara</label>
                        <input type="text" name="speaker_name" id="name" class="block w-full p-2.5 border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Bio Singkat -->
                    <div class="mb-6">
                        <label for="bio" class="block mb-2 text-sm font-medium text-gray-900">Bio Singkat</label>
                        <textarea name="bio" id="bio" rows="3" class="block w-full p-2.5 border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                    </div>

                    <!-- Contact Info -->
                    <div class="mb-6">
                        <label for="contact_info" class="block mb-2 text-sm font-medium text-gray-900">Contact Info</label>
                        <input type="text" name="contact_info" id="contact_info" class="block w-full p-2.5 border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
