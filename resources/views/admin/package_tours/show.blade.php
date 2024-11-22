<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Details Tours') }}
            </h2>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">


                <div class="item-card flex flex-row justify-between md:flex-row flex-col">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($packageTour->thumbnail)}}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{$packageTour->name}}
                            </h3>
                        <p class="text-slate-500 text-sm">
                            {{$packageTour->category->name}}
                        </p>
                        </div>
                    </div>
                    <br>
                    <div  class="md:flex flex-col flex-row">
                        <p class="text-slate-500 text-sm">Price</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Rp {{number_format($packageTour->price, 0, ',', '.')}}</h3>
                    </div>
                    <br>
                    <div class="md:flex flex-row items-center gap-x-3 md:justify-end display: flex">
                        <a href="{{route('admin.package_tours.edit', $packageTour)}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full md:w-auto w-full text-center">
                            Edit
                        </a>
                        <form action="{{route('admin.package_tours.destroy', $packageTour)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full md:w-auto w-full text-center">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <hr class="my-3">
                <div>
                    <h3 class="text-indigo-950 text-xl font-bold">About</h3>
                    <p>
                        {{$packageTour->about}}
                    </p>
                </div>
                <hr class="my-3">
                <div>
                    <h3 class="text-indigo-950 text-xl font-bold">Fasilitas</h3>
                    <p class="float: right">
                        {{$packageTour->fasilitas}}
                    </p>
                </div>
                <hr class="my-3">
                <h3 class="text-indigo-950 text-xl font-bold">Gallery Photos</h3>

                <div class="flex flex-row gap-x-5 flex-wrap">
                    @forelse($latesPhotos as $photo) 
                        <img src="{{Storage::url($photo->photo)}}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px] mb-4">
                    @empty
                    <p>Belum ada foto Terbaru</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>