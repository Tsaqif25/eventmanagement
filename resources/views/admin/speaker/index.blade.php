<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Event') }}
            </h2>
            <a href="{{ route('admin.speaker.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse ($speakers as $speakers)
                <div class="item-card flex flex-row justify-between items-center">
                    <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Nama Pembicara</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $speakers->speaker_name}}</h3>
                    </div>
                    <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Bio Singkat</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $speakers->bio }}</h3>
                    </div>
                    <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Contact Info</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{$speakers->contact_info }}</h3>
                    </div>
                
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href="{{route('admin.speaker.edit' , $speakers) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Edit
                        </a>
                      <form action="{{ route('admin.speaker.destroy', $speakers) }}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                Delete
                            </button>
                        </form> 
                    </div>
                </div> 
                @empty
                <p>Item Tidak Tersedia</p>
                @endforelse
      
            </div>
        </div>
    </div>
</x-app-layout>