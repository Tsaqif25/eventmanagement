<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Organizer') }}
            </h2>
            <a href="{{ route('admin.organizer.index') }}" class="font-bold py-4 px-6 bg-gray-700 text-white rounded-full">
                Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg"> 
                <form action="{{ route('admin.organizer.store') }}" method="POST">
                    @csrf

                    <div class="flex flex-col gap-y-5">
                        <!-- Organizer Name -->
                        <div>
                            <label for="organizer_name" class="text-slate-500 text-sm">Organizer Name</label>
                            <input type="text" name="organizer_name" id="organizer_name" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required value="{{ old('organizer_name') }}">
                            @error('organizer_name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Contact Info -->
                        <div>
                            <label for="contact_info" class="text-slate-500 text-sm">Contact Info (Email)</label>
                            <input type="email" name="contact_info" id="contact_info" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required value="{{ old('contact_info') }}">
                            @error('contact_info')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="text-slate-500 text-sm">Address</label>
                            <textarea name="address" id="address" rows="4" class="border border-gray-300 rounded-lg px-4 py-2 w-full" required>{{ old('address') }}</textarea>
                            @error('address')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Add Organizer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
