<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <!-- Section 1 -->
                <section class="relative w-full bg-top bg-cover md:bg-center" x-data="{ showMenu: false }" style="background-image:url('https://cdn.devdojo.com/images/december2020/couple-on-couch.jpeg')">
                    <div class="absolute inset-0 w-full h-full bg-gray-900 opacity-25"></div>
                    <div class="absolute inset-0 w-full h-64 opacity-50 bg-gradient-to-b from-black to-transparent"></div>
                    <div class="relative flex items-center justify-between w-full h-20 px-8">

                        <a href="#_" class="relative flex items-center h-full pr-6 text-lg font-extrabold text-white">Saas App<span class="text-green-400">.</span></a>
                        <nav class="top-0 left-0 flex-col items-center justify-center hidden h-full space-y-3 bg-white md:justify-end md:bg-transparent md:space-x-5 md:space-y-0 md:relative md:flex md:flex-row" :class="{'flex fixed top-0 left-0 w-full z-40': showMenu, 'hidden': !showMenu }">
                            <a href="#_" class="relative text-lg font-medium tracking-wide text-green-400 transition duration-150 ease-out md:text-sm md:text-white" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Home</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-green-400" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
                            </a>
                            <a href="#_" class="relative text-lg font-medium tracking-wide text-green-400 transition duration-150 ease-out md:text-white md:text-sm" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Features</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-green-400" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
                            </a>
                            <a href="#_" class="relative text-lg font-medium tracking-wide text-green-400 transition duration-150 ease-out md:text-white md:text-sm" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Pricing</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-green-400" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
                            </a>
                            <a href="#_" class="relative text-lg font-medium tracking-wide text-green-400 transition duration-150 ease-out md:text-white md:text-sm" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Blog</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-green-400" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
                            </a>



                            @if (Route::has('login'))
                                <div class="hidden  top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{route('dashboard')}}" class="flex items-center px-3 py-2 text-sm font-medium tracking-normal text-white transition duration-150 bg-green-400 rounded hover:bg-green-500 ease">
                                            Dashboard
                                        </a>
                                    @else
                                        <a href="{{route('login')}}" class="flex items-center px-3 py-2 text-sm font-medium tracking-normal text-white transition duration-150 bg-green-400 rounded hover:bg-green-500 ease">
                                            <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            Log in
                                        </a>

                                    @endauth
                                </div>
                            @endif
                        </nav>

                        <!-- Mobile Nav  -->
                        <nav class="fixed top-0 right-0 z-30 z-50 flex w-10 h-10 mt-4 mr-4 md:hidden">
                            <button @click="showMenu = !showMenu" class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-white hover:bg-opacity-25 focus:outline-none">
                                <svg class="w-5 h-5 text-gray-200 fill-current" x-show="!showMenu" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
                                <svg class="w-5 h-5 text-gray-500" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </nav>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="relative z-10 max-w-6xl px-10 py-40 mx-auto">
                        <div class="flex flex-col items-center h-full lg:flex-row">
                            <div class="flex flex-col items-center justify-center w-full h-full lg:w-2/3 lg:items-start">
                                <p class="inline-block w-auto px-3 py-1 mb-5 text-xs font-medium text-white uppercase bg-green-400 rounded-full bg-gradient-to-br">Join our Program and</p>
                                <h1 class="font-extrabold tracking-tight text-center text-white text-7xl lg:text-left xl:pr-32">Turn Your Passion Into Income</h1>
                            </div>
                            <div class="w-full max-w-sm mt-20 lg:mt-0 lg:w-1/3">
                                <div class="relative">
                                    <div class="relative z-10 h-auto p-8 pt-6 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                                        <h3 class="mb-6 text-2xl font-light">Get started for free</h3><h3>
                                            <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Name -->
                                                <div>
                                                    <x-label for="name" :value="__('Name')" />

                                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                                </div>

                                                <!-- Email Address -->
                                                <div class="mt-4">
                                                    <x-label for="email" :value="__('Email')" />

                                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                                </div>

                                                <!-- Password -->
                                                <div class="mt-4">
                                                    <x-label for="password" :value="__('Password')" />

                                                    <x-input id="password" class="block mt-1 w-full"
                                                             type="password"
                                                             name="password"
                                                             required autocomplete="new-password" />
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="mt-4">
                                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                             type="password"
                                                             name="password_confirmation" required />
                                                </div>

                                                <div class="flex items-center justify-end mt-4">
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                        {{ __('Already registered?') }}
                                                    </a>

                                                    <x-button class="ml-4">
                                                        {{ __('Register') }}
                                                    </x-button>
                                                </div>
                                            </form>
                                        </h3></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>




        </div>
    </body>
</html>
