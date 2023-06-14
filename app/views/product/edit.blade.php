@extends('layouts.main')
@section('content')

    <!-- ----------------------header------------------------------ -->
    <div class="flex flex-col flex-1 w-full sm:px-2">
        <header class="py-4 glassmorphism sm:rounded-xl">
            <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                <!-- Mobile hamburger -->
                <button id="open-sidebar-mobile"
                        class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0
									011-1h12a1 1 0 110 2H4a1 1 0
									01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Search input -->
                <div class="flex justify-center flex-1 lg:mr-32">

                    <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817
											4.817a1 1 0 01-1.414
											1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <form action="{{route('search-product')}}" method="post">
                            <input name="keyword" style="border: 1px solid gray;"
                                   class="w-full py-1 pl-8 pr-2 text-sm text-gray-700  border rounded-md focus:placeholder-gray-500 glassmorphism  shadow-outline-purple header__input-search"
                                   type="text" placeholder="Search..." aria-label="Search" />
                        </form>
                    </div>

                </div>
                <ul class="flex items-center flex-shrink-0 space-x-6">


                    <!-- Profile menu -->
                    <li class="relative">

                        <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none">
                            <img class="object-cover w-8 h-8 rounded-full"
                                 src="{{BASE_URL.'public/uploads/users/'.$_SESSION['auth']->avatar}}"
                                 alt="" />
                        </button>
                    </li>
                    <li class="relative">
                        <a href="{{route('logout')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>


                        </a>
                    </li>
                </ul>
            </div>
        </header>
    <div class="container grid px-6 mx-auto">
        <h2 class="block my-5 text-lg font-semibold uppercase text-gray-900">
            Edit product
        </h2>
        @if(isset($_SESSION['errors'])&&isset($_GET['message']))
            <ul>
                @foreach($_SESSION['errors'] as $error)
                    <li style="color: red;">{{$error}}</li>
                @endforeach
            </ul>
        @elseif(isset($_SESSION['success'])&&isset($_GET['message']))
            <span>{{$_SESSION['success']}}</span>
        @endif
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <form class="w-full" action="{{route('update-product/'.$product->id)}}" method="post" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-3 sm:gap-5 list__form-group">
                        <div class="flex flex-col form__group">
                            <label class="text-sm text-gray-800">Product name</label>
                            <input value="{{$product->name}}" type="text" name="name" id="full_name" required
                                   class=" p-2 mt-1 glassmorphism border-gray-500 text-black text-sm rounded-lg"
                                   placeholder="Product name..." />

                        </div>

                        <div class="flex flex-col form__group">
                            <label class="text-sm text-gray-900">Price</label>
                            <input value="{{$product->price}}" type="number" name="price" id="user_name" required
                                   class="creat-user__input p-2 mt-1 glassmorphism border-gray-500 text-black focus:outline-none text-sm rounded-lg"
                                   placeholder="Price....." />
                        </div>
                        <div class="flex flex-col form__group">
                            <label class="text-sm text-gray-900">Quantity</label>
                            <input value="{{$product->quantity}}" type="number" name="quantity" id="user_name" required
                                   class="creat-user__input p-2 mt-1 glassmorphism border-gray-500 text-black focus:outline-none text-sm rounded-lg"
                                   placeholder="Quantity....." />

                        </div>

                        <div class="flex flex-col form__group">
                            <label class="text-sm text-gray-900">Image</label>
                            <input value="{{$product->image}}" type="file" name="image" id="avatar"
                                   class="creat-user__input p-2 mt-1 glassmorphism border-gray-500 text-black focus:outline-none text-xs rounded-lg"
                                   placeholder="Image..." />
                        </div>

                        <div class="flex flex-col form__group">
                            <label class="text-sm text-gray-900">Category</label>
                            <select name="cate_id" id="cate_id"
                                    class="creat-user__input p-2 mt-1 glassmorphism border-gray-500 text-black focus:outline-none text-sm rounded-lg">
                                @foreach($listCate as $category)
                                    <option value="{{$category->id}}" {{$product->cate_id==$category->id?"selected":''}}>{{$category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="flex flex-col form__group">
                            <label class="text-sm text-gray-800">Detail</label>
                            <input value="{{$product->detail}}" type="text" name="detail" id="detail" required
                                   class=" p-2 mt-1 glassmorphism border-gray-500 text-black text-sm rounded-lg"
                                   placeholder="Detail product..." />


                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button type="submit" name="save"
                                class="w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg sm:w-24 active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                           Save +
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
