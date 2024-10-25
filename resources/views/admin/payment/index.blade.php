<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Event Payments') }}
            </h2>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse ($payments as $payment)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        {{-- Display Payment Proof --}}
                        <img src="{{ asset('storage/' . $payment->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">Bukti Pembayaran</h3>
                        </div>
                    </div> 
                    
                    {{-- Display Nama --}}
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Nama Participant</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $payment->nama }}</h3>
                    </div>
                    
                    {{-- Display Phone --}}
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Nomor HP</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $payment->phone }}</h3>
                    </div>
                    
                    {{-- Display Event Name --}}
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Nama Event</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $payment->event->event_name }}</h3>
                    </div>
                    
                    {{-- Display Status --}}
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Status Pembayaran</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ ucfirst($payment->status) }}</h3>
                    </div>
                    
                    {{-- Action Buttons --}}
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        @if($payment->status === 'pending')
                            <form action="{{ route('admin.payment.approve', $payment->id) }}" method="POST"> 
                                @csrf
                                <button type="submit" class="font-bold py-4 px-6 bg-green-700 text-white rounded-full">
                                    Approve
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.payment.pending', $payment->id) }}" method="POST"> 
                                @csrf
                                <button type="submit" class="font-bold py-4 px-6 bg-yellow-700 text-white rounded-full">
                                    Mark as Pending
                                </button>
                            </form>
                        @endif
                        
                        {{-- Edit Button --}}
                        <a href="{{ route('admin.payment.edit', $payment->id) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Edit
                        </a>
                        
                        {{-- Delete Button --}}
                        <form action="{{ route('admin.payment.destroy', $payment->id) }}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                Delete
                            </button>
                        </form> 
                    </div>
                </div> 
                @empty
                <div class="text-center py-6">
                    <p class="text-slate-500 text-sm">Tidak ada pembayaran yang tersedia.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
