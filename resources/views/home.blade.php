<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Xtreme Tourbulencia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased">

    <header>
        <div class="bg-white">
            <div class="container mx-auto p-2">
                <img src="/img/logo-xtreme.png" alt="">
            </div>
         
          </div>
        <nav class="relative bg-xtreme-500 border-b-2 border-gray-300 text-white">
            <div class="container max-w-7xl mx-auto flex justify-between">
              {{-- <div class="relative block"><img src="/img/logo-xtreme.png" alt=""></div> --}}
              <ul class="flex mx-auto">
              
                <!--Regular Link-->
                <li class="hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                  <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm font-semibold font-poppins ">INICIO</a>
                </li>

                    <!--Hoverable Link-->
                    <li class="hoverable hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm font-semibold  hover:bg-yellow-400 hover:text-xtreme-900  font-poppins">INCA TRAIL</a>
                      <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                          {{-- <div class="w-full text-white mb-8">
                            <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                            <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                          </div> --}}
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 1</h3>
                            </div>
                            <p class="text-gray-500 text-sm">Quarterly sales are at an all-time low create spaces to explore the accountable talk and blind vampires.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 2</h3>
                            </div>
                            <p class="text-gray-500 text-sm">Prioritize these line items game-plan draw a line in the sand come up with something buzzworthy UX upstream selling.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 3</h3>
                            </div>
                            <p class="text-gray-500 text-sm">This proposal is a win-win situation which will cause a stellar paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 4</h3>
                            </div>
                            <p class="text-gray-500 text-sm">This is a no-brainer to wash your face, or we need to future-proof this high performance keywords granularity.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                        </div>
                      </div>
                    </li>

                                        <!--Hoverable Link-->
                                        <li class="hoverable hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                                          <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm font-semibold  hover:bg-yellow-400 hover:text-xtreme-900 font-poppins">SALKANTAY TREK</a>
                                          <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                                            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                                              {{-- <div class="w-full text-white mb-8">
                                                <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                                                <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                                              </div> --}}
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                                                  </svg>
                                                  <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 1</h3>
                                                </div>
                                                <p class="text-gray-500 text-sm">Quarterly sales are at an all-time low create spaces to explore the accountable talk and blind vampires.</p>
                                                <div class="flex items-center py-3">
                                                  <svg class="h-6 pr-3 fill-current text-blue-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                                  </svg>
                                                  <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                                                </div>
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                                                  </svg>
                                                  <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 2</h3>
                                                </div>
                                                <p class="text-gray-500 text-sm">Prioritize these line items game-plan draw a line in the sand come up with something buzzworthy UX upstream selling.</p>
                                                <div class="flex items-center py-3">
                                                  <svg class="h-6 pr-3 fill-current text-blue-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                                  </svg>
                                                  <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                                                </div>
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
                                                  </svg>
                                                  <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 3</h3>
                                                </div>
                                                <p class="text-gray-500 text-sm">This proposal is a win-win situation which will cause a stellar paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                                                <div class="flex items-center py-3">
                                                  <svg class="h-6 pr-3 fill-current text-blue-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                                  </svg>
                                                  <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                                                </div>
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                                                  </svg>
                                                  <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 4</h3>
                                                </div>
                                                <p class="text-gray-500 text-sm">This is a no-brainer to wash your face, or we need to future-proof this high performance keywords granularity.</p>
                                                <div class="flex items-center py-3">
                                                  <svg class="h-6 pr-3 fill-current text-blue-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                                                  </svg>
                                                  <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                                                </div>
                                              </ul>
                                            </div>
                                          </div>
                                        </li>

                                                            <!--Hoverable Link-->
                    <li class="hoverable hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm font-semibold  hover:bg-yellow-400 hover:text-xtreme-900 font-poppins">LARES TREK</a>
                      <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                          {{-- <div class="w-full text-white mb-8">
                            <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                            <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                          </div> --}}
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 1</h3>
                            </div>
                            <p class="text-gray-500 text-sm">Quarterly sales are at an all-time low create spaces to explore the accountable talk and blind vampires.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 2</h3>
                            </div>
                            <p class="text-gray-500 text-sm">Prioritize these line items game-plan draw a line in the sand come up with something buzzworthy UX upstream selling.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 3</h3>
                            </div>
                            <p class="text-gray-500 text-sm">This proposal is a win-win situation which will cause a stellar paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-gray-500 text-bold mb-2">Heading 4</h3>
                            </div>
                            <p class="text-gray-500 text-sm">This is a no-brainer to wash your face, or we need to future-proof this high performance keywords granularity.</p>
                            <div class="flex items-center py-3">
                              <svg class="h-6 pr-3 fill-current text-blue-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                              </svg>
                              <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                            </div>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm font-semibold font-poppins ">CHOQUEQUIRAO</a>
                    </li>
                    <li class="hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm font-semibold font-poppins ">ABOUT US</a>
                    </li>
                    <li class="hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm font-semibold font-poppins ">BLOG</a>
                    </li>
                    <li class="hover:bg-yellow-400 hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm font-semibold font-poppins ">CONTACT US</a>
                    </li>

                    
                  </ul>
                </div>
              </nav>
    </header>
    <section>

        <div>
            <img src="/img/slider-salkantay-camp.jpg" alt="">
        </div>

    </section>
    <section>
      <p>lorem</p>
    </section>
{{-- 
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
        </div> --}}
        
        
    </body>
</html>
