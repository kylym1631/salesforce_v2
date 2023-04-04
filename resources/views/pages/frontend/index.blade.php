<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend bootcamp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles

</head>
<style>
    [x-cloak] {
        display: none !important;
    }
    .loading {
        opacity: 0;
        -webkit-transform: translateY(45px);
        transform: translateY(45px);
        -webkit-transition: opacity 1s, -webkit-transform 0.8s;
        transition: opacity 1s, -webkit-transform 0.8s;
        transition: transform 0.8s, opacity 1s;
        transition: transform 0.8s, opacity 1s, -webkit-transform 0.8s;
    }

    .loading.loaded {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
    }


    /* glitch */

    button[type=submit] {
        /* width: 15rem; */
        /* height: 4rem; */
        /* font-size: 1.2rem; */
        background-color: #eee;
        color: black;
        box-shadow: -5px 5px #aaa;
        animation: glitch 5s linear infinite;
        font-family: monospace;
        transition: all .2s;
    }

    button[type=submit]:active {
        transform: translateX(-5px) translateY(5px);
        box-shadow: -2px 2px #aaa;
        transition: all .2s;
    }

    @keyframes glitch {
        0% {
            transform: rotateX(10deg) skewX(90deg);
            background-color: #0ffbf9;
            filter: blur(3px);
        }
        1% {
            transform: none;
            background-color: #eee;
            filter: blur(0);
        }
        2% {
            transform: rotateX(10deg) skewX(90deg);
            background-color: #cc0f39;
            filter: blur(3px);
        }
        3% {
            transform: rotateX(12deg) skewX(79deg);
            background-color: #eee;
            filter: blur(0);
        }
        4% {
            transform: translateX(20px) skewX(11deg);
            background-color: #0ffbf9;
            filter: blur(3px);
        }
        5% {
            transform: rotateY(10deg) skewY(30deg);
            background-color: #eee;
            filter: blur(0);
        }
        6% {
            transform: translateX(-50px) skewX(40deg);
            background-color: #cc0f39;
            filter: blur(3px);
        }
        7% {
            transform: rotateX(7deg) skewX(81deg);
            background-color: #eee;
            filter: blur(0);
        }
        8% {
            transform: none;
        }
    }


    /* parallax */
    .parallax {
        perspective: 500px;
        transform-style: preserve-3d;
    }

    .typing-parallax {
        position: relative;
        top: 0;
        left: 0;
        transform: translate3d(0, 0, 0);
        transition: all 0.2s ease-out;
    }

</style>
<body class="	 bg-gray-900">

<!-- ANGLED IMAGE -->
<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="relative overflow-hidden">

    <header class="relative"
            x-data="{open:false}"
            x-init="init()"
            @keydown.escape="onEscape"
            @close-popover-group.window="onClosePopoverGroup"
    >
        <div class="bg-gray-900 pt-6 ">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="{{env('APP_URL').'/frontend'}}">
                            <span class="sr-only">SkyForce</span>
                            <img class="h-8 w-auto sm:h-20" src="assets/images/logo-3.png" alt="">
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button"
                                    class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                    @click="open =!open"  aria-expanded="false"
                                    :aria-expanded="open.toString()">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="hidden space-x-8 md:flex md:ml-10">

                    <a href="#advantages" class="scroll-link text-base font-medium text-white hover:text-gray-300">Advantages</a>

                    <a href="#faq" class="scroll-link text-base font-medium text-white hover:text-gray-300">FAQ</a>

                    <a href="#pricing" class="scroll-link text-base font-medium text-white hover:text-gray-300">Pricing</a>

                    <a href="#contact" class="scroll-link text-base font-medium text-white hover:text-gray-300">Contact</a>

                </div>
                <!-- <div class="hidden md:flex md:items-center md:space-x-6">
                  <a href="#" class="text-base font-medium text-white hover:text-gray-300">
                    Log in
                  </a>
                  <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                    Start free trial
                  </a>
                </div> -->
            </nav>
        </div>


        <div x-show="open"
             x-transition:enter="duration-150 ease-out"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="duration-100 ease-in"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             x-description="Mobile menu, show/hide based on menu open state."
             class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top md:hidden"
             x-ref="panel"
             @click.away="open = false"
             x-cloak
        >
            <div class="rounded-lg shadow-md bg-gray-800 ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-12 w-auto" src="assets/images/logo-3.png"
                             alt="">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                                class="bg-inherit rounded-md p-2 inline-flex items-center justify-center text-gray-100 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-600"
                                @click="open =!open">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pt-5 pb-6">
                    <div class="px-2 space-y-1">

                        <a href="#advantages"
                           class="scroll-link block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:bg-gray-700">Advantages</a>

                        <a href="#pricing"
                           class="scroll-link block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:bg-gray-700">Pricing</a>

                        <a href="#faq"
                           class="scroll-link block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:bg-gray-700">FAQ</a>

                        <a href="#contact"
                           class="scroll-link block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:bg-gray-700">Contact</a>

                    </div>
                    <!-- <div class="mt-6 px-5">
                      <a href="#" class="block text-center w-full py-3 px-4 rounded-md shadow bg-green-600 text-white font-medium hover:bg-green-700">Start free trial</a>
                    </div>
                    <div class="mt-6 px-5">
                      <p class="text-center text-base font-medium text-gray-500">Existing customer? <a href="#" class="text-gray-900 hover:underline">Login</a></p>
                    </div> -->
                </div>
            </div>
        </div>

    </header>

    <main>
        <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:overflow-hidden">
            <div class="parallax mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                        <div class="lg:py-24">
                            <a href="https://skyforce.dev"
                               class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                <span
                                    class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-green-500 rounded-full">SkyForce</span>
                                <span class="ml-4 text-sm">Visit our main page</span>
                                <svg class="ml-2 w-5 h-5 text-gray-500"
                                     x-description="Heroicon name: solid/chevron-right"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <h1 class="mt-4 text-4xl tracking-wider font-semibold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                <span class="block">Learn to code,</span>
                                <span class="block text-green-400">build your dreams</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                Discover the foundations of web development and create stunning websites with our
                                beginner-friendly frontend coding bootcamp.
                            </p>
                            <div class="mt-10 sm:mt-12">
                                <a href="#contact" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                    <div class="sm:flex">
{{--                                        <div class="min-w-0 flex-1">--}}
{{--                                            <label for="contact-info" class="sr-only">Contact information</label>--}}
{{--                                            <input id="contact-info" type="text" placeholder="Enter your contact info"--}}
{{--                                                   class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300 focus:ring-offset-gray-900">--}}
{{--                                        </div>--}}
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <button type="submit"
                                                    class="block w-full py-3 px-4  shadow text-white font-medium  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300 focus:ring-offset-gray-900">
                                                Secure your seat in the next bootcamp!
                                            </button>
                                        </div>
                                    </div>
{{--                                    <p class="mt-3 text-sm text-gray-300 sm:mt-4"> Choose your learning speed and--}}
{{--                                        complete our frontend bootcamp in 4-6 months</p>--}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative hidden sm:block">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                            <img
                                class="-z-10 typing-parallax w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                src="assets/images/frontend/typing.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More main page content here... -->
    </main>
</div>
<!-- ANGLED IMAGE END -->


<!-- TEAM -->
<!--
This example requires Tailwind CSS v2.0+

The alpine.js code is *NOT* production ready and is included to preview
possible interactivity
-->
<div class="bg-gray-900">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="space-y-12">
            <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Meet our team</h2>
                <p class="text-xl text-gray-300"> Meet the team who will support you on your web development journey</p>
            </div>
            <ul role="list"
                class=" space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-3 lg:gap-8">
                @foreach($teams as $person)
                    <x-teams-item :person="$person"/>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- TEAM END -->



<!-- ADVANTAGE -->
<div  id="advantages" class="bg-gray-200 py-6 sm:pt-12 lg:pt-16 sm:pb-16 lg:pb-20 relative">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute overflow-hidden -mt-20" style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="text-gray-700 text-2xl lg:text-4xl font-bold text-center mb-4 md:mb-6">Our competitive
                advantage</h2>

            <p class="max-w-screen-md text-gray-600 md:text-lg text-center mx-auto">
                We provide students with a comprehensive understanding of frontend development, from HTML and CSS to JavaScript and beyond, giving them the skills they need to build complex and engaging websites.
            </p>
        </div>
        <!-- text - end -->

        <div class="advantage-list grid sm:grid-cols-2 xl:grid-cols-3 gap-12 xl:gap-16">
            <!-- feature - start -->
            @foreach($advantages as $advantage)
                <x-advantage-item :advantage="$advantage"/>
            @endforeach
        <!-- feature - end -->

            {{--            <!-- feature - start -->--}}
            {{--            <div class="flex flex-col items-center">--}}
            {{--                <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center text-green-500 mb-2 sm:mb-4">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24"--}}
            {{--                         stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
            {{--                              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>--}}
            {{--                    </svg>--}}
            {{--                </div>--}}

            {{--                <h3 class="text-lg md:text-xl font-semibold text-center mb-2 text-white">Security</h3>--}}
            {{--                <p class="text-gray-300 text-center mb-2">Filler text is dummy text which has no meaning however looks--}}
            {{--                    very similar to real text.</p>--}}
            {{--                <a href="#"--}}
            {{--                   class="text-green-500 hover:text-green-600 active:text-green-700 font-bold transition duration-100">More</a>--}}
            {{--            </div>--}}
            {{--            <!-- feature - end -->--}}

            {{--            <!-- feature - start -->--}}
            {{--            <div class="flex flex-col items-center">--}}
            {{--                <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center text-green-500 mb-2 sm:mb-4">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24"--}}
            {{--                         stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
            {{--                              d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>--}}
            {{--                    </svg>--}}
            {{--                </div>--}}

            {{--                <h3 class="text-lg md:text-xl font-semibold text-center mb-2 text-white">Cloud</h3>--}}
            {{--                <p class="text-gray-300 text-center mb-2">Filler text is dummy text which has no meaning however looks--}}
            {{--                    very similar to real text.</p>--}}
            {{--                <a href="#"--}}
            {{--                   class="text-green-500 hover:text-green-600 active:text-green-700 font-bold transition duration-100">More</a>--}}
            {{--            </div>--}}
            {{--            <!-- feature - end -->--}}

            {{--            <!-- feature - start -->--}}
            {{--            <div class="flex flex-col items-center">--}}
            {{--                <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center text-green-500 mb-2 sm:mb-4">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24"--}}
            {{--                         stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
            {{--                              d="M13 10V3L4 14h7v7l9-11h-7z"/>--}}
            {{--                    </svg>--}}
            {{--                </div>--}}

            {{--                <h3 class="text-lg md:text-xl font-semibold text-center mb-2 text-white">Speed</h3>--}}
            {{--                <p class="text-gray-300 text-center mb-2">Filler text is dummy text which has no meaning however looks--}}
            {{--                    very similar to real text.</p>--}}
            {{--                <a href="#"--}}
            {{--                   class="text-green-500 hover:text-green-600 active:text-green-700 font-bold transition duration-100">More</a>--}}
            {{--            </div>--}}
            {{--            <!-- feature - end -->--}}

            {{--            <!-- feature - start -->--}}
            {{--            <div class="flex flex-col items-center">--}}
            {{--                <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center text-green-500 mb-2 sm:mb-4">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24"--}}
            {{--                         stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
            {{--                              d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>--}}
            {{--                    </svg>--}}
            {{--                </div>--}}

            {{--                <h3 class="text-lg md:text-xl font-semibold text-center mb-2 text-white">Support</h3>--}}
            {{--                <p class="text-gray-300 text-center mb-2">Filler text is dummy text which has no meaning however looks--}}
            {{--                    very similar to real text.</p>--}}
            {{--                <a href="#"--}}
            {{--                   class="text-green-500 hover:text-green-600 active:text-green-700 font-bold transition duration-100">More</a>--}}
            {{--            </div>--}}
            {{--            <!-- feature - end -->--}}

            {{--            <!-- feature - start -->--}}
            {{--            <div class="flex flex-col items-center">--}}
            {{--                <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center text-green-500 mb-2 sm:mb-4">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24"--}}
            {{--                         stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
            {{--                              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>--}}
            {{--                    </svg>--}}
            {{--                </div>--}}

            {{--                <h3 class="text-lg md:text-xl font-semibold text-center mb-2 text-white">Dark Mode</h3>--}}
            {{--                <p class="text-gray-300 text-center mb-2">Filler text is dummy text which has no meaning however looks--}}
            {{--                    very similar to real text.</p>--}}
            {{--                <a href="#"--}}
            {{--                   class="text-green-500 hover:text-green-600 active:text-green-700 font-bold transition duration-100">More</a>--}}
            {{--            </div>--}}
            {{--            <!-- feature - end -->--}}
        </div>
    </div>
</div>
<!-- ADVANTAGE END -->

<!-- FAQ -->
<div  id="faq"  class="bg-gray-900 py-6 sm:py-8 lg:py-12 relative">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute overflow-hidden -mt-20" style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="text-white text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Frequently asked
                questions</h2>

            <p class="max-w-screen-md text-gray-300 md:text-lg text-center mx-auto">This is a section of some simple
                filler text, also known as placeholder text. It shares some characteristics of a real written text but
                is random or otherwise generated.</p>
        </div>
        <!-- text - end -->

        <div class="faq-list grid sm:grid-cols-2 gap-4 md:gap-8">
            @foreach($faqs as $question )
                <x-faq-item :question="$question"/>
            @endforeach
        </div>
    </div>

</div>
<!-- FAQ end -->
{{--PRICING--}}
<div id="pricing" class="bg-white py-6 sm:py-8 lg:py-12 relative" >

    <div class="max-w-screen-lg px-4 md:px-8 mx-auto">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2   class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Choose your price</h2>
        </div>
        <!-- text - end -->

        <div class="price-list flex flex-wrap justify-center items-center gap-4 sm:gap-0">
            <!-- left side - start -->
            <div class="w-full sm:w-1/2 lg:w-1/3 bg-gray-800 rounded-lg sm:rounded-r-none p-6 sm:p-8">
                <div class="mb-4">
                    <h3 class="text-gray-100 text-2xl sm:text-3xl font-semibold">All-Inclusive</h3>
                    <p class="text-gray-300">Pay each month fully, while studying</p>
                </div>

                <div class="space-x-2 mb-4">
                    <span class="text-gray-100 text-4xl font-bold">$250</span>
                    <span class="text-gray-300 text-2xl line-through">$300</span>
                </div>

                <ul class="text-gray-300 space-y-2 mb-6">
                 @foreach($allPayment as $payment)
                        <x-payment-item :payment="$payment"/>
                 @endforeach
                </ul>

                <a href="#contact"
                   class="block bg-gray-500 hover:bg-gray-600 focus-visible:ring ring-indigo-300 text-gray-100 active:text-gray-300 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Get
                    All-Iclusive Bundle</a>
            </div>
            <!-- left side - end -->

            <!-- right side - start -->
            <div
                class="w-full sm:w-1/2 bg-gradient-to-tr from-indigo-500 to-violet-400 rounded-lg shadow-xl p-6 sm:p-8">
                <div class="flex flex-col lg:flex-row justify-between items-start gap-4 mb-4">
                    <div>
                        <h3 class="text-white text-2xl sm:text-3xl font-semibold">Flexible payment</h3>
                        <p class="text-indigo-100">Pay as you succeed</p>
                    </div>

                    <span
                        class="inline-block order-first lg:order-none bg-indigo-200 bg-opacity-50 text-white text-xs font-semibold tracking-wider uppercase rounded-full px-3 py-1">Most popular</span>
                </div>

                <div class="space-x-2 mb-4">
                    <span class="text-white text-4xl font-bold">$150</span>
                    <span class="text-indigo-100 text-xl">and $150 later</span>
                </div>

                <ul class="text-indigo-100 space-y-2 mb-6">
                    @foreach($flexiblePayment as $payment)
                        <x-payment-item :payment="$payment"/>
                    @endforeach



                </ul>

                <a href="#contact"
                   class="block bg-indigo-200 bg-opacity-50 hover:bg-indigo-300 active:bg-indigo-400 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Get Flexible Bundle</a>
            </div>
            <!-- right side - end -->
        </div>
    </div>
</div>
{{--PRICING END--}}


<!-- GET IN TOUCH -->
<div  id="contact" class=" relative overflow-hidden  pb-6 sm:pb-8 lg:pb-12">
    <video
        id="typing-video"
        autoplay
        muted
        playsinline
        class="absolute -z-10 w-auto min-w-full min-h-full max-w-none brightness-50"
        src="assets/images/frontend/typing.mp4"
        preload="none"


    >
        <!-- autoplay
        loop -->
        <source
            src="assets/images/frontend/typing.mp4"
            type="video/mp4"
        ></source>
    </video>
   <livewire:contact-form/>
</div>
<!-- GET IN TOUCH END -->

<!-- FOOTER -->
<div class=" bg-gray-900 pt-4 ">

    <footer class="max-w-screen-2xl px-4 md:px-8 mx-auto">

        <div class="flex flex-col items-center  pt-6">


            <!-- social - start -->
            <div class="flex gap-4 justify-center">
                <a href="https://www.instagram.com/" target="_blank"
                   class="text-gray-300 hover:text-green-400 active:text-gray-600 transition duration-100">
                    <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

                <a href="https://api.whatsapp.com/send?phone=48503358080" target="_blank"
                   class="text-gray-300 hover:text-green-400 active:text-gray-600 transition duration-100">
{{--                    <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"--}}
{{--                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path--}}
{{--                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>--}}
{{--                    </svg>--}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 -mt-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="currentColor" >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                    </svg>
                </a>


                <a href="https://www.linkedin.com/company/sky-bridges/about/" target="_blank"
                   class="text-gray-300 hover:text-green-400 active:text-gray-600 transition duration-100">
                    <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>


            </div>
            <!-- social - end -->
        </div>

        <div class="text-gray-400 text-sm text-center py-8">© 2023 SkyForce</div>
    </footer>
</div>
<!-- FOOTER END -->

@livewireScripts

<script>
    const reveals = document.querySelectorAll(" .advantage-list, .team-list .faq-list, .price-list");

    reveals.forEach((el) => {
        el.classList.add("loading");
    });

    const observerOptions = {
        root: null,
        rootMargin: "300px",
        threshold: 0.3
    };

    function observerCallback(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("loaded");
            }
        });
    }

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    reveals.forEach((el) => observer.observe(el));

    // parallax

    const parallax = document.querySelector('.parallax');
    const svg = parallax.querySelector('.typing-parallax');
    const MAX_MOVEMENT = 400; // maximum movement limit in pixels
    const SENSITIVITY = 5; // mouse movement sensitivity
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;

    function updateImagePosition() {
        const dx = (targetX - svg.currentX) / 8;
        const dy = (targetY - svg.currentY) / 8;
        svg.currentX += dx;
        svg.currentY += dy;
        svg.style.transform = `translate3d(${svg.currentX}px, ${svg.currentY}px, 0)`;
        requestAnimationFrame(updateImagePosition);
    }

    function throttle(fn, interval) {
        let lastTime = 0;
        return function () {
            const now = Date.now();
            if (now - lastTime >= interval) {
                lastTime = now;
                fn.apply(this, arguments);
            }
        };
    }

    const handleMouseMove = throttle(function (e) {
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;

        const dx = (x - mouseX) * SENSITIVITY;
        const dy = (y - mouseY) * SENSITIVITY;

        mouseX = x;
        mouseY = y;

        targetX = -dx * MAX_MOVEMENT;
        targetY = -dy * MAX_MOVEMENT;

        targetX = Math.max(-MAX_MOVEMENT, Math.min(MAX_MOVEMENT, targetX));
        targetY = Math.max(-MAX_MOVEMENT, Math.min(MAX_MOVEMENT, targetY));
    }, 16);

    svg.currentX = 0;
    svg.currentY = 0;
    parallax.addEventListener('mousemove', handleMouseMove);
    updateImagePosition();


    // Typing video

    var myVideo = document.getElementById("typing-video");
    var typingTimeout = null;

    // Pause the video initially
    myVideo.pause();

    // Listen for keystrokes
    document.addEventListener("keydown", function (event) {
        // Play the video on keystroke
        myVideo.play();

        // Reset the timer on keystroke
        clearTimeout(typingTimeout);

        // Pause the video after 0.5 seconds of no keystrokes
        typingTimeout = setTimeout(function () {
            myVideo.pause();
        }, 800);
    });



</script>
</body>
</html>
