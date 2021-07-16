<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Xtreme Tourbulencia</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
          .hoverable 
          {
            color: red;
          }
        </style>
    </head>
    <body class="antialiased">
      
    <header class="z-50">
       {{-- <div class="bg-gradient-to-r from-yellow-400 via-yellow-400 to-yellow-300 text-center py-1">
        <small><a href="#">Xtreme Tourbulencia Guests: We are committed to the safety of our staff, guests & the communities where we travel. Please see our TRAVELER INFORMATION for 2021 & 2022 trip details.</a></small>
      </div> --}}

  
                          <div class="bg-white">
                              <div class="container mx-auto p-2">
                                  <div class="flex justify-between">
                                    <div><img src="{{ asset('/img/logo-xtreme.png') }}" alt=""></div>
                                    <div>
                                      <div>
                                        <img src="{{ asset('img/tripadvisor-.png') }}" alt="" class="w-40">
                                      </div> 
                                    </div>
                                    <div class="flex items-center">
                                      
                                <div>
                                  <div>
                                    <div class="home-top text-gray-600 font-oswald text-xs tracking-wide flex gap-2 mb-1">
                                      <span>Covid 19</span>|
                                      <span>About Us</span>|
                                      <span>Contact Us</span>|
                                      <span>Contact Us</span>|
                                      <span>Contact Us</span>|
                                      <span>Languages:</span>
                                     <span><img src="{{ asset('img/es.svg') }}" class="w-5" alt=""></span> 
                                     <span><img src="{{ asset('img/fr.svg') }}" class="w-5" alt=""></span>
                                      
                                  </div>
                                </div>
                                  <div class="float-right">
                                    <div class="info inline-block mt-1">
                                        <div><span class="font-oswald text-base text-gray-700">Phones</span>
                                          <span class="mx-2 font-roboto text-sm text-gray-600 tracking-wider">
                                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="h-5 inline-block text-xtreme-700 font-bold" viewBox="0 0 16 16">
                                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                            </svg>  Peru +51 984610644
                                          </span>
                                          <span class="mx-2 font-roboto text-sm text-gray-600 tracking-wider">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 inline-block text-xtreme-700 font-bold" viewBox="0 0 16 16">
                                              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                            </svg> +51 984610644
                                          </span>
                                          
                                      
                                      </div>
                                    </div>
                                    {{-- <div class="btn inline-block">
                                      <span class="relative inline-flex rounded-md shadow-sm">
                                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 text-base leading-6 font-medium rounded-md text-white bg-xtreme-500 hover:text-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                                          Book Now
                                        </button>
                                        <div class="flex absolute top-0 right-0 -mt-0.5 -mr-1">
                                          <span class="absolute inline-flex animate-ping">
                                            <span class="inline-flex rounded-full h-3 w-3 bg-red-500 opacity-75"></span>
                                          </span>
                                          <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                                        </div>
                                      </span>
                                    </div> --}}
                                  </div>
                                </div>
                      
                  </div>
                </div>
            </div>
         
          </div>
        <nav class="relative border border-gray-100 text-white sm:hidden md:hidden hidden lg:block z-50 bg-xtreme-500">
            <div class="container max-w-7xl mx-auto flex justify-between">
              {{-- <div class="relative block"><img src="/img/logo-xtreme.png" alt=""></div> --}}
              <ul class="flex mx-auto">
              
                <!--Regular Link-->
                <li class="hover:text-xtreme-900 sm:px-1 lg:px-3 ">
                  <a href="{{ route('home') }}" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm tracking-wider font-oswald font-medium hover:text-gray-700 text-white hover:bg-white">INICIO</a>
                </li>
                    <!--Hoverable Link-->
                        <li class="hoverable hover:text-gray-700 sm:px-1 lg:px-3 text-gray-700">
                          <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm  tracking-wider  hover:bg-white  hover:text-gray-700 font-oswald text-white font-medium">INCA TRAIL</a>
                          <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white border">
                            <div class="container max-w-7xl mx-auto w-full flex flex-wrap justify-between ">

                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-200 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">          
                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">INCA TRAIL MACHU PICCHU</h3>
                                </div>
                                <div>
                                  <ul class="list-inside">
                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Short Inca Trail Machu Picchu 2 Days Trek</a></li>
                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Inca Trail to Machu Picchu 4 Days <span class="bg-red-500 text-white px-2 rounded-xl">Top!</span> </a></li>
                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Private Inca Trail 2 Days</a></li>
                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Private Inca Trail 4 Days</a></li>  
                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Salkantay Trek – Inca Trail Machu Picchu 6 Days <span class="bg-red-500 text-white px-2 rounded-xl">Top!</span></a></li>                                
                                  </ul>
                                </div>
                              </ul>
                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-200 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center py-3">
                                  
                                  {{-- <iframe width="540" height="200" src="https://www.youtube.com/embed/yAbEedMLVc4?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                  <img src="{{ asset('img/video-inca-trail.png') }}" alt="">
                                 
                                </div>
                              </ul>
                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-200 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center py-3 px-3">
                                  <div>
                                    <p class="text-gray-500 text-sm">Inca Trail Tours to Machu Picchu, the most emblematic Inca architectural work perched on a hill in a meander of the Urubamba River, accessible to authorized officials of the Empire and the Inca through a beautiful path starting from Cusco and passing through several incredible constructions and the sacredness is increased when it approached the Citadel of Machu Picchu.Inca Trail Hiking</p>

                                    <div class="mt-3">
                                      <a href="#" class="mt-4 border-transparent hover:border-xtreme-600 rounded-lg px-3 border transition duration-300 " type="buttom"><span class="text-xtreme-500 text-sm">See More ➦</span></a>
                                    </div>
                                  </div>
                                  
                                   
                                </div>
                              </ul>
                            </div>
                          </div>
                        </li>

                                        <!--Hoverable Link-->
                                        <li class="hoverable hover:text-xtreme-900 sm:px-1 lg:px-3">
                                          <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm  tracking-wider  hover:bg-white  hover:text-gray-700 font-oswald text-white font-medium">ALTERNATIVE TREK</a>
                                          <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white border">
                                            <div class="container mx-auto w-full flex flex-wrap justify-between">
                                               {{-- <div class="w-full bg-red-500 text-white mb-8">
                                                <h2 class="text-2xl">Main Hero Message for the menu section</h2>
                                                <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                                              </div>  --}}
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-100 border-b sm:border-r lg:border-b-0 pb-3 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">Salkantay Trek</h3>
                                                </div>
                                                <div>
                                                  <ul class="list-inside">
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Salkantay Trek Machu Picchu 4 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Salkantay Trek Machu Picchu 5 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Salkantay Trek – Inca Trail Machu Picchu 6 Days <span class="bg-red-500 text-white px-2 rounded-xl">Top!</span></a></li>
                                                  </ul>
                                                </div>
                                                {{-- <p class="text-gray-500 text-sm">Quarterly sales are at an all-time low create spaces to explore the accountable talk and blind vampires.</p> --}}
                                                
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-100 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-3 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  
                                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">Lares Trek</h3>
                                                </div>
                                                <div>
                                                  <ul class="list-inside">
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Lares Trek Machu Picchu 4 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Lares Trek – Inca Trail Machu Picchu 4 Days</a></li>
                                                 
                                                  </ul>
                                                </div>
                                                
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-100 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-3 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  
                                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">Choquequirao Trek</h3>
                                                </div>
                                                <div>
                                                  <ul class="list-inside">
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Choquequirao Trek & Huanipaca 4 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Choquequirao to Machu Picchu Trek 6 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Choquequirao Trek Machu Picchu 8 Days</a></li>
                                                    {{-- <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Vilcabamba to Machu Picchu Trek 5 Days</a></li> --}}
                                                  </ul>
                                                </div>
                                                
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-100 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-3 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  
                                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">Inca Jungle Trek</h3>
                                                </div>
                                                <div>
                                                  <ul class="list-inside">
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Inka Jungle Trail Machu Picchu 3 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Inka Jungle Trail Machu Picchu 4 Days</a></li>
                                                  </ul>
                                                </div>
                                                
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-3 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  
                                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">Huchuy Qosqo Trek</h3>
                                                </div>
                                                <div>
                                                  <ul class="list-inside">
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Huchuy Qosqo to Machu Picchu 2 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Huchuy Qosqo Trek & Sacred Valley 2 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Huchuy Qosqo, Sacred Valley with Machupicchu 03 Days</a></li>
                                                  </ul>
                                                </div>
                                                
                                              </ul>
                                              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 border-gray-100 pb-3 pt-6 lg:pt-3">
                                                <div class="flex items-center">
                                                  
                                                  <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">Ausangate Trek</h3>
                                                </div>
                                                <div>
                                                  <ul class="list-inside">
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Ausangate Trek 4 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Ausangate Trek 5 Days</a></li>
                                                    <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Ausangate Trek With Rainbow Mountain 5 Days</a></li>
                                                  
                                                  </ul>
                                                </div>
                                                
                                              </ul>
                                            </div>
                                          </div>
                                        </li>

                                                            <!--Hoverable Link-->
                    <li class="hoverable hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm  tracking-wider  hover:bg-white  hover:text-gray-700 font-oswald text-white font-medium">MACHU PICCHU</a>
                      <div class="px-6 py-3 mega-menu sm:mb-0 shadow-xl bg-white border">
                        <div class="container max-w-7xl mx-auto w-full flex flex-wrap justify-between ">
                       
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Machu Picchu Full Day Tour</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/full-day.jpg') }}" class="h-56 w-full" alt="">  
                            </div>
                          </ul>
                          
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Machu Picchu with Overnight</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/machu-picchu-overnight.jpg') }}" class="h-56 w-full" alt="">  
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Machu Picchu & Sacred Valley 2 Days</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/ollantaytambo-package-1.jpg') }}" class="h-56 w-full" alt="">  
                            </div>
                          </ul>
                          {{-- <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Machu Picchu & Sacred Valley Tours 2 Days</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/mapi.jpg') }}" class="h-56 w-full" alt="">  
                            </div>
                          </ul> --}}
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-100 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Culture Adventure Cusco 5 Days</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/xtreme-machu-piccu-tour-02.jpg') }}" class="h-56 w-full" alt="">  
                            </div>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="hoverable hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm  tracking-wider  hover:bg-white  hover:text-gray-700 font-oswald text-white font-medium">DAILY TOURS</a>
                      <div class="px-6 py-3 mega-menu sm:mb-0 shadow-xl bg-white border">
                        <div class="container max-w-7xl mx-auto w-full flex flex-wrap justify-between ">
                       
                          
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/5 border-gray-100 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Laguna humantay</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/humantay-lake.jpg') }}" class="w-full" alt="">  
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/5 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">montaña 7 colores</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/rainbow-mountain.jpg') }}" class="w-full" alt="">  
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/5 border-gray-100 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">valle sagrado</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/sacred-valley.jpg') }}" class="w-full" alt="">  
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/5 border-gray-100 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">puente queswachaca</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/qeswachaka-inca-bridge.jpg') }}" class="w-full" alt="">  
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/5 border-gray-100 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-oswald tracking-wide text-base text-center pl-2 text-gray-600 mb-2 uppercase">Waqrapukara</h3>
                            <div class="flex items-center">
                              <img src="{{ asset('img/waqrapukara-cusco.jpg') }}" class="w-full" alt="">  
                            </div>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="hoverable hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-4 lg:p-3 text-sm lg:text-sm  tracking-wider  hover:bg-white  hover:text-gray-700 font-oswald text-white font-medium">ABOUT US</a>
                      <div class="p-6 pt-2 mega-menu mb-16 sm:mb-0 shadow-xl bg-white border">
                        <div class="container max-w-7xl mx-auto w-full flex flex-wrap justify-between">

                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-200 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">          
                              <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">ABOUT US</h3>
                            </div>
                            <div>
                              <ul class="list-inside">
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Our Offices</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">IWhy Xtreme Tourbulencia?</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Yellow Team</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Responsible Tourism</a></li>              
                              </ul>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-200 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">          
                              <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">TRAVEL INFORMATION</h3>
                            </div>
                            <div>
                              <ul class="list-inside">
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Booking Information</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Optional & Rent</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Difficulty levels</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Inca Trail Questions</a></li>
                                                                
                              </ul>
                            </div>
                          </ul>
                          <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 border-gray-200 pb-6 pt-6 lg:pt-3">
                            <div class="flex items-center">          
                              <h3 class="font-oswald tracking-wide text-lg border-l-2 pl-2 border-xtreme-600 text-gray-600 mb-2 uppercase">MORE ABOUT XTREME</h3>
                            </div>
                            <div>
                              <ul class="list-inside">
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Inca Trail Availability 2021</a></li>  
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Our Videos</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Our Blog</a></li>
                                <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">Payments</a></li>
                                {{-- <li class="py-2 border-b text-sm"><a class="hover:text-red-500 transition duration-500" href="#">--</a></li>                                   --}}
                              </ul>
                            </div>
                          </ul>
                        </div>
                      </div>
                    </li>
                  
                    <li class="hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm tracking-wider font-oswald font-medium hover:text-gray-700 text-white hover:bg-white">VACATION PACKAGES</a>
                    </li>
                    <li class="hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm tracking-wider font-oswald font-medium hover:text-gray-700 text-white hover:bg-white">BLOG</a>
                    </li>
                    
                    <li class="hover:text-xtreme-900 sm:px-1 lg:px-3">
                      <a href="#" class="relative block py-2 px-2 lg:p-3 text-sm lg:text-sm tracking-wider font-oswald font-medium hover:text-gray-700 text-white hover:bg-white">CONTACT US</a>
                    </li>

                    
                  </ul>
                </div>
              </nav>
    </header>

        @yield('section_home')
  
        <section class="trademarks bg-gray-50 mt-10">
          <div class="container">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 border-t">
              <div><img class="mx-auto w-32 my-1" src="{{ asset('img/peru-marca.png') }}"  alt=""></div>
              <div><img class="mx-auto w-32 my-1" src="{{ asset('img/directur.png') }}"  alt=""></div>
              <div><img class="mx-auto w-32 my-1" src="{{ asset('img/paypal-f.png') }}"  alt=""></div>
              <div><img class="mx-auto w-32 my-1" src="{{ asset('img/mincetur.png') }}"  alt=""></div>
              <div><img class="mx-auto w-32 my-1" src="{{ asset('img/promperu.png') }}"  alt=""></div>
              <div><img class="mx-auto w-32 my-1" src="{{ asset('img/safetravels.png') }}"  alt=""></div>

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
 
     @stack('scripts')

    </body>
</html>

 
 