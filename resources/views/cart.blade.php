<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <h2 class="font-semibold text-xl text-gray-800">
            {{ __('Cart') }}
        </h2>
    </x-slot>
    <main class="my-20">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-10">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                    @endif
                    <h3 class="text-3xl font-bold">Carts</h3>
                    <div class="flex-4">
                        <table class="w-full h-30 text-left lg:text-base" cellspacing="0">
                            <thead>
                                <tr class="h-12 uppercase">
                                    <th class=" md:table-cell"> image</th>
                                    <th class="text-left">Name</th>
                                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                                     
                                        <span class="  lg:inline">Quantity</span>
                                    </th>
                                    <th class=" text-left lg:inline"> price</th>
                                    <th lass=" text-left lg:inline"> Remove </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td class=" pb-4 md:table-cell">
                                       
                                       <img  src="{{asset('images/'.$item->image) }}" 
                                        alt="{{$item->name}}" >
                                       
                                    </td>
                                    <td>
                                        <a href="#">
                                            <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}</p>

                                        </a>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">

                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id}}">
                                                    <input type="number" name="qty" value="{{ $item->quantity }}"
                                                        class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                                    <button
                                                        class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=" text-center md:table-cell">
                                        <span class="text-sm  lg:text-base">
                                            {{ $item->price }}
                                        </span>
                                    </td>
                                    <td class="  text-center md:table-cell">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button
                                                class="px-2 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div>
                            Total: ${{ Cart::getTotal() }}
                        </div>
                        <div>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Clear
                                    Carts</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>