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
      <div class="bg-gradient-to-r from-yellow-400 via-yellow-400 to-yellow-300 text-center py-1">
        <small><a href="#">Xtreme Tourbulencia Guests: We are committed to the safety of our staff, guests & the communities where we travel. Please see our TRAVELER INFORMATION for 2021 & 2022 trip details.</a></small>
      </div>
      
        <div class="bg-white">
            <div class="container mx-auto p-2">
                <div class="flex justify-between">
                  <div><img src="{{ asset('/img/logo-xtreme.png') }}" alt=""></div>
                  <div class="flex items-center ">
                      {{-- <div>
                        <img src="{{ asset('img/tripadvisor-.png') }}" alt="" class="w-40">
                      </div> --}}
                      <div>
                        <button class="bg-xtreme-500 px-5 py-3 text-sm shadow-sm font-sm tracking-wider border text-green-100 rounded-sm hover:shadow-md hover:bg-xtreme-600 ">Book NooW</button>
                      </div>
                  </div>
                </div>
                
            </div>
         
          </div>
        <nav class="relative bg-xtreme-500 border-b-2 border-gray-300 text-white sm:hidden md:hidden hidden lg:block">
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
                        <div class="container max-w-6xl mx-auto w-full flex flex-wrap justify-between ">
                          {{-- <div class="w-full text-white mb-8">
                            <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                            <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                          </div> --}}
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-black text-bold mb-2">INCA TRAIL </h3>
                            </div>
                            <div class="flex items-center py-3">
                              <ul class="list-disc list-inside">
                                <li>Inca Trail 4 Days / 3 Night</li>
                                <li>Inca Trail 4 Days / 3 Night</li>
                                <li>Inca Trail 4 Days / 3 Night</li>
                                <li>Inca Trail 4 Days / 3 Night</li>
                              </ul>
                            </div>

                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">
                              <svg class="h-8 mb-3 mr-3 fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 2</h3>
                            </div>
                            <p class="text-black text-sm">Prioritize these line items game-plan draw a line in the sand come up with something buzzworthy UX upstream selling.</p>
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
                              <svg class="h-8 mb-3 mr-3 fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 3</h3>
                            </div>
                            <p class="text-black text-sm">This proposal is a win-win situation which will cause a stellar paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
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
                              <svg class="h-8 mb-3 mr-3 fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                              </svg>
                              <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 4</h3>
                            </div>
                            <p class="text-black text-sm">This is a no-brainer to wash your face, or we need to future-proof this high performance keywords granularity.</p>
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

        @yield('section_home')
  
        <section class="trademarks">
          <div class="container">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 my-5">
              <div><img class="mx-auto" src="{{ asset('img/peru-marca.png') }}" width="185" alt=""></div>
              <div><img class="mx-auto" src="{{ asset('img/directur.png') }}" width="185" alt=""></div>
              <div><img class="mx-auto" src="{{ asset('img/paypal-f.png') }}" width="185" alt=""></div>
              <div><img class="mx-auto" src="{{ asset('img/mincetur.png') }}" width="185" alt=""></div>
              <div><img class="mx-auto" src="{{ asset('img/promperu.png') }}" width="185" alt=""></div>
              <div><img class="mx-auto" src="{{ asset('img/safetravels.png') }}" width="185" alt=""></div>

            </div>
          </div>
        </section>
       <section>
          <div>
          </div>  
          <div class="bg-yellow-400 py-2 text-center">
           <span class="font-oswald font-medium tracking-widest"><span class="text-2xl">❝</span> AT RHYTHM OF ADVENTURE <span class="text-2xl">❞</span></span>
          </div>
       </section>
      
        <footer class="footer relative pt-1 border-b-1 border-white bg-gradient-to-r from-xtreme-600 via-xtreme-700 to-xtreme-600">
          <div class="container mx-auto px-6">

              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 sm:mt-8">
                  
                      <div>
                          <span class="font-medium text-xtreme-y-500 uppercase mb-2 font-oswald tracking-wide">DESTINATIONS</span>
                           <ul>
                             <li><a href="#" >Salkantay Trek</a></li>
                             <li><a href="#" >Inca Trail</a></li>
                             <li><a href="#" >Choquequirao</a></li>
                             <li><a href="#" >Salkantay Trek</a></li>
                             <li><a href="#" >Inca Trail</a></li>
                             <li><a href="#" >Choquequirao</a></li>
                           </ul>
                      </div>
                      <div>
                        <span class="font-medium text-xtreme-y-500 uppercase mb-2 font-oswald tracking-wide">COMPANY</span>
                           <ul>
                            <li><a href="#">Our Offices</a></li>
                            <li><a href="#">Why Xtreme Tourbulencia?</a></li>
                            <li><a href="#">Yellow Team</a></li>
                            <li><a href="#">Cooks for the Treks</a></li>
                            <li><a href="#">Responsible Tourism</a></li>
                            <li><a href="#">Difficulty levels</a></li>
                            <li><a href="#">Inca Trail Questions</a></li>
                           </ul>
                      </div>
                      <div>
                        <span class="font-medium text-xtreme-y-500 uppercase mb-2 font-oswald tracking-wide">XTREME OFFICE</span>
                        <ul>
                          <li>info@x-tremetourbulencia.com</li>
                          <li>reserve@x-tremetourbulencia.com</li>
                          <li>gerencia@x-tremetourbulencia.com</li>
                          <li>Calle Plateros 364, Cusco 08002</li>
                          <li>Sunday CLOSED</li>
                        </ul>
                      </div>
                      <div>
                        <span class="font-medium text-xtreme-y-500 uppercase mb-2 font-oswald tracking-wide">XTREME OFFICE</span>
                           <ul>
                            <li><b>Monday to Friday</b> <br>9:00 - 13:00 H & 15:00 - 19:00 H</li>
                            <li><b>Saturday</b> <br>9:00 to 13:00 H and From 17:00 to 19:00 H</li>
                            <li><b>Sunday</b> <br>17:00 to 19:00 H</li>
                           </ul>
                    </div>
                    <div class="mx-3">
                      <span class="font-medium text-xtreme-y-500 uppercase mb-2 font-oswald tracking-wide">FOLLOW US</span>
                         <div class="flex flex-row mt-2">
                           <div class="mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-8 h-auto text-white" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
                           </div>
                           <div class="mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-auto text-white" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                           </div>
                           <div class="mx-2">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="w-8 h-auto text-white"  xmlns="http://www.w3.org/2000/svg"><path d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path></svg>
                           </div>
                           
                         </div>

                         <div class="flex flex-row mt-2">
                          <div class="mx-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-8 h-auto text-white" viewBox="0 0 16 16">
                             <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
                          </div>
                          <div class="mx-2">
                           <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-auto text-white" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                             <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                           </svg>
                          </div>
                          <div class="mx-2">
                           <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="w-8 h-auto text-white"  xmlns="http://www.w3.org/2000/svg"><path d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path></svg>
                          </div>
                          
                        </div>
                  </div>
                  
              </div>
          </div>
          <div class="container">
              <div class="mt-5 border-t border-white border-opacity-80 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:mt-8 pt-5">
                <div><img src="{{ asset('img/logo-xtreme.png') }}" alt=""></div>
                <div><img class="max-w-sm w-60 mx-auto" src="{{ asset('img/paypal-others.png') }}" alt=""></div>
                <div></div>

              </div>
          </div>
          <div class="bg-gray-800 border-t mt-6 sm:mt-12 lg:mt-12">
              <div class="flex flex-col items-center">
                  <div class="text-center py-2">
                      <small class="text-white">
                        <?="Copyright © ".date("Y")." Xtreme Tourbulencia";?>
                      </small>
                  </div>
              </div>
          </div>
      </footer>
  
     <script src="{{ mix('/js/app.js') }}"></script>
     <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>

 
 