<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Vila') }}
            </h2>
            <a href="{{route('admin.package_tours.create')}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @forelse($package_tours as $tour)
                <div class="item-card flex flex-row justify-between md:flex-row flex-col">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($tour->thumbnail)}}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{$tour->name}}
                            </h3>
                        <p class="text-slate-500 text-sm">
                            {{$tour->category->name}}
                        </p>
                        </div>
                    </div> 
                    <br>
                    <div  class="md:flex flex-col flex-row">
                        <p class="text-slate-500 text-sm">Price</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Rp {{number_format($tour->price, 0, ',', '.')}}</h3>
                    </div>
                    <br>
                
                    <div class="md:flex flex-row items-center gap-x-3 md:justify-end display: flex">
                        <a href="{{route('admin.package_tours.show', $tour)}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full md:w-auto w-full text-center">
                            Manage
                        </a>
                    </div>
                </div>
                <hr class="my-1">
                @empty
                <p>Belum ada package tour terbuka</p>
                @endforelse
                

            </div>
        </div>
    </div>
</x-app-layout>
