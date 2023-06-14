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
        <!-- component -->
        <main class="sm:px-6 w-full">
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">List Products</p>

                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="sm:flex items-center justify-between">

                    <button onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <p ><a class="text-sm font-medium leading-none text-white" href="{{BASE_URL.'add-cate'}}">Add Category</a></p>
                    </button>
                </div>
                <div class="mt-7 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                        <tr class="text-center">
                            <th class="">
                                <div class="flex items-center text-center pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">ID</p>
                                </div>
                            </th>
                            <th class="">
                                <div class="flex items-center text-center pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">Name</p>
                                </div>
                            </th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($listCate as $cate)
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td class="">
                                    <div class="flex items-center text-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">{{$cate->id}}</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M9.16667 2.5L16.6667 10C17.0911 10.4745 17.0911 11.1922 16.6667 11.6667L11.6667 16.6667C11.1922 17.0911 10.4745 17.0911 10 16.6667L2.5 9.16667V5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5H9.16667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <circle cx="7.50004" cy="7.49967" r="1.66667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        </svg>
                                        <p class="text-sm leading-none text-gray-600 ml-2">{{$cate->name}}</p>
                                    </div>
                                </td>

                                <td class="px-5  whitespace-nowrap">
                                    <div class="box__action flex gap-2">
                                        <a href="{{ route('edit-cate/'. $cate->id) }}  " class="text-indigo-600 hover:text-indigo-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('delete-cate').'/' . $cate->id}}" class="text-indigo-600 hover:text-indigo-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <style>.checkbox:checked + .check-icon {
                display: flex;
            }
        </style>


@endsection
