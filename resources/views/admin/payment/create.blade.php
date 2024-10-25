<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Payment') }}
            </h2>
            <a href="{{ route('admin.payment.index') }}" class="font-bold py-4 px-6 bg-gray-700 text-white rounded-full">
                Back to Payments
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <form action="{{ route('admin.payment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-y-5">

                        <!-- Payment Proof Upload -->
                        <div>
                            <label for="payment_proof" class="block text-sm font-medium text-gray-700">Bukti Pembayaran</label>
                            <input type="file" name="payment_proof" id="payment_proof" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <!-- Participant Id -->
                        <div>
                            <label for="participant_id" class="block text-sm font-medium text-gray-700">Participant Id</label>
                            <input type="text" name="participant_id" id="participant_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                    

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Save Payment
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
