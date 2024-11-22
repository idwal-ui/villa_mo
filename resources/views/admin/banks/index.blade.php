<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Banks') }}
            </h2>
            <a href="{{route('admin.package_banks.create')}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                 @forelse($banks as $bank)
                <div class="item-card flex flex-row justify-between md:flex-row flex-col">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($bank->logo)}}" alt="" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{$bank->bank_name}}
                            </h3>
                        </div>
                    </div>
                    <br>
                    <div  class="md:flex flex-col flex-row">
                        <p class="text-slate-500 text-sm">Date</p>
                        <h3 class="text-indigo-950 text-xl font-bold">
                            {{$bank->created_at->format('M d, Y')}}
                        </h3>
                    </div>
                    <br>
                    <div class="md:flex flex-row items-center gap-x-3 md:justify-end display: flex">
                        <a href="{{route('admin.package_banks.edit', $bank)}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full md:w-auto w-full text-center">
                            Edit
                        </a>
                        <form action="{{route('admin.package_banks.destroy', $bank)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full md:w-auto w-full text-center">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <hr class="my-3">
                @empty
                <p>Belum ada data bank terbaru</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
