<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Bookings') }}
            </h2>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @forelse ($package_bookings as $booking )
                <div class="item-card flex flex-row justify-between md:flex-row flex-col">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($booking->tour->thumbnail)}}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{$booking->tour->name}}
                            </h3>
                        <p class="text-slate-500 text-sm">
                            {{$booking->tour->category->name}}
                        </p>
                        </div>
                    </div> 
                    <br>
                        @if($booking->is_paid)
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-green-500 text-white">
                            SUCCESS
                        </span>
                        @else
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-orange-500 text-white">
                            PENDING
                        </span> 
                        @endif
                    <br>
                    <div  class="md:flex flex-col flex-row">
                        <p class="text-slate-500 text-sm">Price</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Rp {{number_format($booking->total_amount, 0, ',', '.')}}</h3>
                    </div>
                    <br>
                    <div  class="md:flex flex-col flex-row">
                        <p class="text-slate-500 text-sm">Total Days</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{$booking->quantity}} Night</h3>
                    </div>
                    <br>
                    <div class="md:flex flex-row items-center gap-x-3 gap-x-3 md:justify-end display: flex">
                        <a href="{{route('admin.package_bookings.show', $booking)}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full md:w-auto w-full text-center">
                            Details
                        </a>
                    </div>
                </div>
                <hr color="blue">
                @empty
                <p>belum ada pesanan tour terbaru</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
