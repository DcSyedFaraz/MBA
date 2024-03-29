<style>
    .mega-menu {
        display: none;
        left: 225px;
        right: 0;
        position: absolute;
        text-align: left;
        width: 56%;
        top: 60px;

    }


    @media (min-width: 768px) {
        .mega-menu {
            display: none;
            left: 96px;
            right: 0;
            position: absolute;
            text-align: left;
            width: 87%;
            top: 128px;

        }
    }

    @media (min-width: 1024px) {
        .mega-menu {
            display: none;
            left: 105px;
            right: 0;
            position: absolute;
            text-align: left;
            width: 70%;
            top: 64px;

        }
    }

    @media (min-width: 1280px) {
        .mega-menu {
            display: none;
            left: 225px;
            right: 0;
            position: absolute;
            text-align: left;
            width: 56%;
            top: 50px;

        }
    }

    /* #toggle Class Styles */
    .toggleable>label:after {
        content: "\25BC";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
    }

    .toggle-input {
        display: none;
    }

    .toggle-input:not(checked)~.mega-menu {
        display: none;
    }

    .toggle-input:checked~.mega-menu {
        display: block;
    }

    .toggle-input:checked~label:after {
        content: "\25B2";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
    }
</style>
<!-- Header -->
<div class="bg-primary-one text-white ">
    <div class="container flex flex-col items-center mx-auto md:flex-row sm:justify-between py-3 px-10">
        <div class=" space-x-3 flex flex-col md:flex-row  font-medium text-center">
            <a href="https://api.whatsapp.com/send/?phone={{ $web_setting->whatsapp_no }}"><i
                    class="fa fa-whatsapp "></i>{{ ' +' . $web_setting->whatsapp_no }}</a>
            <div class="md:hidden block">
                <a href="tel:{{ $web_setting->contact }}"><i class="fa fa-phone "></i>+{{ $web_setting->contact }}</a>
            </div>
            <p class=" flex">
                <a href="tel:{{ $web_setting->contact }}" class="hidden md:block md:flex-row  "><i
                        class="fa fa-phone"></i> +{{ $web_setting->contact }}</a>
            </p>
            <!--<a href="tel:(001)224-338-5225"><i class="fa fa-phone mr-2"></i>(001)224-338-5225</a>-->
            {{-- <span class="whitespace-nowrap overflow-hidden"><a href="mailto:{{ $web_setting->email }}">
                <i class="fa fa-envelope-o mr-2 "></i>{{ $web_setting->email }}</a></span> --}}
        </div>

        <div class=" space-x-3">
            <a href="{{ $web_setting->whatsapp_no }}"><i class="fa fa-whatsapp"></i></a>
            <a href="{{ $web_setting->facebook_link }}"><i class="fa fa-facebook"></i></a>
            <a href="{{ $web_setting->twitter_link }}"><i class="fa fa-twitter"></i></a>
            <a href="{{ $web_setting->instagram_link }}"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="w-full  text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800 shadow-md">
    {{-- <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-center lg:flex-row "> --}}
    <div x-data="{ open: false }"
        class=" flex flex-col max-w-screen-xl px-2 mx-auto lg:items-center lg:justify-between lg:flex-row ">

        <div class="flex flex-row items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center py-2 px-6">
                <img src="{{ asset('imgs/logo.png') }}" alt="Logo" class="h-16 mt-0">
            </a>
            <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" style="display: none;"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-center lg:flex-row">
            <a href="{{ route('home') }}"
                class="block font-semibold text-base hover:text-primary-two py-2 px-1 lg:px-2 xl:px-2">Home</a>
            <a href="{{ route('about') }}"
                class="block font-semibold text-base hover:text-primary-two py-2 px-1 lg:px-2 ">About us</a>
            <ul class="flex toggleable  md:block">
                <li
                    class="md:block hidden group dropdown mt-[0.5rem] text-black hover:text-green-500  cursor-pointer font-bold text-base  tracking-wide">

                    {{-- <a href="#" class="  md:mx-2 lg:mx-0 xl:mx-2 " for="toggle-one">Services</a>
                    <div class="group-hover:block dropdown-menu  hidden bg-green-500  ">
                        <div role="toggle"
                            class="toggle-input group-hover:block hidden hover:text-white mega-menu z-10 sm:mb-0  bg-primary-two ">
                            <div class="w-full flex flex-wrap justify-between">
                                <div class="flex flex-row font-normal">
                                    <ul class=" w-full mx-2 xl:pt-2">

                                        <li>
                                            <a href="{{ route('essay') }}"
                                                class="block p-2 text-base hover:bg-primary-one text-white">MBA
                                                Essay</a>
                                        </li>
                                    </ul>
                                    {{-- <ul
                                        class="px-4 w-full   xl:px-[2rem] border-solid   border-gray-600 border-b  py-2 ">
                                        <li>
                                            <a href="{{ route('services.show', 'speech-writing') }}"
                                                class="block p-2 text-base hover:bg-primary-one text-white">Assignment
                                                Writing</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.show', 'speech-writing') }}"
                                                class="block p-2 text-base hover:bg-primary-one text-white">Coursework
                                                Writing</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.show', 'speech-writing') }}"
                                                class="block p-2 text-base hover:bg-primary-one text-white">Homework
                                                Writing</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.show', 'speech-writing') }}"
                                                class="block p-2 text-base hover:bg-primary-one text-white">Research
                                                Paper</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.show', 'speech-writing') }}"
                                                class="block p-2 text-base hover:bg-primary-one text-white">Term
                                                Papers</a>
                                        </li>
                                    </ul> --}}
                                {{-- </div>
                            </div>
                        </div>
                    </div> --}} 
                </li>
            </ul>

            @if (!empty($services))
                <div @click.away="open = false" class=" relative" x-data="{ open: false }">
                    <button @click="open = !open" class="block font-semibold py-2 hover:text-primary-one ">
                        <span>Services</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 transition-transform duration-200 transform rotate-0">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 md:mt-4 origin-top-right rounded-md shadow-lg md:w-48 z-50 hidden "
                        :class="{ 'hidden': !open }" style="display: none;">
                        <div class="px-2 py-2 bg-primary-one rounded-md shadow">

                            <a href="{{ route('essay') }}"
                                class="block px-4 py-2 mt-2 text-sm text-white font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-200 focus:text-gray-300 ">MBA
                                Essay</a>

                            @foreach ($services as $service)
                                <a class="block px-4 py-2 mt-2 text-sm text-white font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-200 focus:text-gray-300 "
                                    href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif



            <a href="{{ route('pricing') }}"
                class="block font-semibold text-base hover:text-primary-two py-2 px-1 lg:px-2 ">Pricing</a>

            <a href="{{ route('reviews') }}"
                class="block font-semibold text-base hover:text-primary-two py-2 px-1 lg:px-2 ">Reviews</a>

            {{-- <a href="{{ route('blogs') }}"
                class="block font-semibold text-base hover:text-primary-two py-2 px-1 lg:px-2 ">Blogs</a> --}}

            <a href="{{ route('contact') }}"
                class="block font-semibold text-base hover:text-primary-two py-2 px-1 lg:px-2 ">Contact</a>

            <a href="{{ route('login') }}"
                class=" text-center block font-semibold text-base hover:underline-offset-2 hover:underline py-2 px-1 lg:px-4 rounded-full bg-primary-one text-white">Log
                In</a>

            <div
                class="flex flex-col  md:flex-row  md:items-center  my-3 mx-1 lg:my-0 md:space-x-1 xl:space-x-4 space-y-2 md:space-y-0  ">
                <a href="{{ route('order') }}"
                    class="text-center text-sm md:text-lg py-2 lg:px-4 xl:px-4 font-semibold text-white rounded-full btn lg:text-xs xl:py-3 xl:text-sm   bg-primary-one animate-bounce">
                    Order Now
                </a>


                {{-- <a href="{{ $web_setting->whatsap_no }}" class="flex flex-row justify-center items-center text-center hover:text-primary-one text-sm md:text-lg py-3 lg:px-4 xl:px-5 btn xl:py-3 xl:text-sm font-semibold text-white rounded-full  lg:text-xs  bg-primary-two ">
                    <img src="{{asset('imgs/whatsap.png')}}" alt="Logo" class=" h-6 lg:h-5 xl:h-5 mx-2 lg:mr-2 xl:mx-3 text-center">  {{ $web_setting->contact }}
                </a> --}}
            </div>
        </nav>
    </div>
</div>
