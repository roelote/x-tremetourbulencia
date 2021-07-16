@extends('layouts.app2')

@section('section_home')

 <section class="relative flex items-center justify-start h-200 overflow-hidden">
  <div class="absolute h-full w-full z-20 bg-gray-700 bg-opacity-30"></div>
   {{-- <div class="relative z-30 p-5 text-2xl text-white bg-purple-300 bg-opacity-100 rounded-xl"> AT RHYTHM OF ADVENTURE  </div> --}}

  <div class="z-40 absolute top-32 left-10">
    <div class="bg-white max-w-md p-3 rounded-lg border-l-4 border-xtreme-600 flex">
      <img src="{{ asset('img/satelital-phones.png') }}" class="w-20" alt="">
      <p class="font-oswald text-lg text-gray-800">Satellite phones and radio communications
        In each of our treks - Thinking of yours safety</p>
    </div>
  </div>

  <video
   autoplay 
    loop
    muted
    class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
    poster="{{ asset('img/slider-salkantay-camp.jpg') }}">
    <source
      src="{{ asset('video/xtreme-home.mp4') }}"
      type="video/mp4"
    />
    Your browser does not support the video tag.
  </video>
  
</section> 

    {{-- <section>
      <div class="swiper-container sliderh">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="relative">
              <img  class="h-5/6 w-full" src="{{ asset('img/slider-salkantay-camp.jpg') }}" />
            </div>
          </div>
          <div class="swiper-slide">
            <img  class="h-5/6 w-full" src="{{ asset('img/rainbow-mountain-slider.jpg') }}" />
          </div>
          <div class="swiper-slide">
            <div class="relative">
              <img  class="h-5/6 w-full" src="{{ asset('img/slider-salkantay-camp.jpg') }}" />
              <div class="absolute bottom-2/4 right-2/4">
                  <h2 class="text-white text-2xl font-oswald">SALKANTAY TREK MACHU PICCHU</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>  --}}

    <section class="text-home"> 
      <div class="container my-4">
        <h1 class="text-center sm:text-3xl lg:text-4xl sm:py-5 md:pt-8 lg:pt-10 font-oswald font-medium tracking-wide text-xl">XTREME TOURBULENCIA LOCAL TREKKING SPECIALISTS!</h1>
        <span class="max-w-xs h-1 w-32 bg-green-800 sm:block mx-auto -mt-4 mb-5 hidden "></span>
        <p class="leading-7 lg:max-w-6xl mx-auto sm:max-w-3xl text-center px-4">Xtreme Tourbulencia Travel Agency is a Peruvian company interested in the development and promote sustainable tourism, protecting the local environment and culture. We offer a variety of tours and adventure expeditions in the whole of Peru. Our tours are all designed with the highest level of customer service and responsible tourism. We look forward to sharing Peru’s amazing outdoors and deep culture heritage with you!</p>
      </div>
      <div class="container max-w-6xl">
        <div class="flex justify-center">
          
          <button type="button" class="transition duration-500 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-gray-100 rounded px-4 py-2 mx-3">Salkantay Trek</button>
          <button type="button" class="transition duration-500 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-gray-100 rounded px-4 py-2 mx-3">Inca Trail</button>
          <button type="button" class="transition duration-500 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-gray-100 rounded px-4 py-2 mx-3">Lares Trek</button>
          <button type="button" class="transition duration-500 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-gray-100 rounded px-4 py-2 mx-3">Choquequirao Trek</button>
          <button type="button" class="transition duration-500 border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-gray-100 rounded px-4 py-2 mx-3">Inca Jungle</button>
        </div>

      </div>

    </section>

<section class="bg-gray-50 mt-5 sm:mt-7 lg:py-10">
          <div class="container p-10 md:py-10 px-5 md:p-10">
            <h2 class="text-center sm:text-2xl lg:text-3xl font-oswald font-medium tracking-wide text-xl mb-6"> MOST POPULAR INCA TREKS & TOURS </h2>
            <span class="max-w-xs h-1 w-32 bg-green-800 sm:block mx-auto -mt-4 mb-5 hidden "></span>
            <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-10 mt-10">
              <article class="mx-auto group w-full shadow-xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer">
                  <section class="content bg-cover bg-center h-80 " style="background-image: url({{ asset('img/1.jpg') }});">
                      <div class="flex items-end w-full h-full bg-black bg-opacity-10 text-white text-sm font-bold  p-4 ">
                          <div class="w-1/2 flex items-center">
                              <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                              <span>4116</span>
                          </div>
                          <div class="w-1/2 flex items-center flex-row-reverse">
                            <svg class="w-6 h-6 ml-2 place-items-end group-hover:animate-ping absolute " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            {{-- <span class="place-items-end">Book Now</span> --}}
                        </div>
                      </div>
                  </section>

                  <div class="mt-4 px-4">
                      <span class="font-oswald text-red-500">Cusco</span>
                      <h2 class="text-xl font-oswald border-b pb-2">CLASSIC SALKANTAY TREK 5 DAYS</h2>
                      
                      <p class="mt-2 text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds)</p>
                      
                      
                  </div>
              </article>

              <article class="mx-auto group w-full shadow-xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer group">
                  <section class="content bg-cover bg-center h-80 " style="background-image: url({{ asset('img/2.jpg') }});">
                      <div class="flex items-end w-full h-full bg-black bg-opacity-10 text-white text-sm font-bold  p-4 ">
                          <div class="w-1/2 flex items-center">
                              <svg class="w-6 h-6 mr-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                              <span>11219</span>
                          </div>
                          <div class="w-1/2 flex items-center flex-row-reverse">
                            <svg class="w-6 h-6 ml-2 place-items-end group-hover:animate-ping absolute " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            {{-- <span class="place-items-end">Book Now</span> --}}
                        </div>
                      </div>
                  </section>

                  <div class="mt-4 px-4">
                    <span class="font-oswald text-red-500">Cusco</span>
                    <h2 class="text-xl font-oswald border-b pb-2">CLASSIC SALKANTAY TREK 5 DAYS</h2>
                    
                    <p class="mt-2 text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds)</p>
                    
                </div>
              </article>

              <article class="mx-auto group w-full shadow-xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer">
                  <section class="content bg-cover bg-center h-80 " style="background-image: url({{ asset('img/3.jpg') }});">
                      <div class="flex items-end w-full h-full bg-black bg-opacity-10 text-white text-sm font-bold  p-4 ">
                          <div class="w-1/2 flex items-center">
                              <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                              <span>27615</span>
                          </div>
                          <div class="w-1/2 flex items-center flex-row-reverse">
                            <svg class="w-6 h-6 ml-2 place-items-end group-hover:animate-ping absolute " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            {{-- <span class="place-items-end">Book Now</span> --}}
                        </div>
                      </div>
                  </section>

                  <div class="mt-4 px-4">
                    <span class="font-oswald text-red-500">Cusco</span>
                    <h2 class="text-xl font-oswald border-b pb-2">CLASSIC SALKANTAY TREK 5 DAYS</h2>
                    
                    <p class="mt-2 text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds)</p>
                    
                </div>
              </article>

              <article class="mx-auto group w-full shadow-xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer">
                  <section class="content bg-cover bg-center h-80 " style="background-image: url({{ asset('img/1.jpg') }});">
                      <div class="flex items-end w-full h-full bg-black bg-opacity-10 text-white text-sm font-bold  p-4 ">
                          <div class="w-1/2 flex items-center">
                              <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                              <span>15982</span>
                          </div>
                          <div class="w-1/2 flex items-center flex-row-reverse">
                              <svg class="w-6 h-6 ml-2 place-items-end group-hover:animate-ping absolute " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                              {{-- <span class="place-items-end">Book Now</span> --}}
                          </div>
                      </div>
                  </section>
              
                  <div class="mt-4 px-4">
                    <span class="font-oswald text-red-500">Cusco</span>
                    <h2 class="text-xl font-oswald border-b pb-2">CLASSIC SALKANTAY TREK 5 DAYS</h2>
                    
                    <p class="mt-2 text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds)</p>
                    
                </div>
              </article>
          </section>
        </div>
</section>

<section class="shadow-2xl border border-gray-200">
      <div class="container max-w-6xl">
        <div class="flex flex-wrap -mx-3 overflow-hidden">

          <div class="my-3 px-3 w-full overflow-hidden sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2">

            <div class="swiper-container incatrail">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('img/11.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/33.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/44.png') }}" alt=""></div>
              </div>
               <div class="swiper-button-next" style="color: #fff"></div>
               <div class="swiper-button-prev" style="color: #fff"></div> 
              <div class="swiper-pagination"></div>
            </div>

             
          </div>
        
          <div class="my-3 px-3 w-full overflow-hidden sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2">
            <span><img src="{{ asset('img/hiking.svg') }}" class="w-16 mx-auto border-b-4 border-xtreme-y-500" alt=""></span>
            <h2 class="text-center text-3xl font-oswald my-2">THE CLASSIC INCA TRAIL & MACHU PICCHU 2021 - 2022</h2>
            <p class="text-gray-700 tracking-wide text-justify my-5">We are now booking for the 2021 season. In 2020 within hours after the permits went on sale, the majority of the popular dates from April through September sold out. By booking for 2021 Classic Inca Trail in 2021, you insure that you will not miss this incredible trek. Even after booking, you have the option until December 1st 2020 to change your dates or cancel with a full refund. </p>
            <div class="flex justify-center mt-4">
              <button class="border border-gray-300 bg-xtreme-500 text-white rounded-sm font-bold py-4 px-6 ml-2 flex items-center transition duration-500 hover:bg-xtreme-y-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="mr-1" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>

                  INCA TRAIL AVAILABILITY
              </button>
              <button class="border border-gray-300 bg-xtreme-500 text-white rounded-sm font-bold py-4 px-6 ml-2 flex items-center transition duration-500 hover:bg-xtreme-y-500 hover:text-gray-800">
                  TOURS INCA TRAIL
                  <svg class="h-5 w-5 ml-2 fill-current" clasversion="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                  <path id="XMLID_11_" d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                      l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                      c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z"/>
                  </svg>
              </button>
          </div>
          </div>
        
        </div>
      </div>
</section>

{{-- <section class="flex items-center justify-center  m-auto mb-5 bg-fixed bg-center bg-cover relative bg-gradient-to-tl from-xtreme-500 to-xtreme-700" > --}}
{{-- <section class="bg-gray-200">
  <div class="container">
      <div class="grid grid-cols-6 gap-4 ">
          <div><img class="m-3 w-24 mx-auto fill-current text-white" src="{{ asset('img/call-center.svg') }}" alt=""></div>
          <div><img class="m-3 w-24 mx-auto fill-current text-white" src="{{ asset('img/call-center.svg') }}" alt=""></div>
          <div><img class="m-3 w-24 mx-auto fill-current text-white" src="{{ asset('img/call-center.svg') }}" alt=""></div>
          <div><img class="m-3 w-24 mx-auto fill-current text-white" src="{{ asset('img/call-center.svg') }}" alt=""></div>
          <div><img class="m-3 w-24 mx-auto fill-current text-white" src="{{ asset('img/call-center.svg') }}" alt=""></div>
          <div><img class="m-3 w-24 mx-auto fill-current text-white" src="{{ asset('img/call-center.svg') }}" alt=""></div>
      </div>
  </div> --}}
  {{-- <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
   
    <h4 class="font-oswald text-3xl text-xtreme-y-500 uppercase tracking-wide text-center ">Your Safety is our Priority </h4>
    <h5 class="font-oswald text-base text-white tracking-wide text-center my-2">Explore with Confidence</h5>
    
  </div> --}}
  {{-- <div class="overlay absolute bg-gray-900 w-full h-full opacity-30"></div> --}}
{{-- </section> --}}




<section class="bg-gray-50">
  <section class="container mx-auto p-10 md:py-20 px-5 md:p-10 md:px-0 ">
    <h2 class="text-center sm:text-2xl lg:text-3xl font-oswald font-medium tracking-wide text-xl mb-3"> DAILY TOURS </h2>
    <p class="max-w-6xl mx-auto text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ea ipsam. Et quasi, officia labore enim eos nesciunt exercitationem error alias itaque sapiente pariatur excepturi expedita, ipsum iure aliquid facilis?</p>
    <br>
    {{-- <span class="max-w-xs h-1 w-32 bg-green-800 sm:block mx-auto -mt-4 mb-5 hidden "></span> --}}

    <div class="swiper-container dailytours">
      <div class="swiper-wrapper pb-10">
        <div class="swiper-slide">
          <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-xl">
            <div class="max-h-125 overflow-hidden">
                <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/humantay-lake.jpg') }}" alt="">
            </div>
            <div class="flex justify-between mx-5 my-3 ">
                <h3 class="font-oswald text-lg uppercase">Laguna Humantay</h3>
                <div class="text-base text-white px-3 flex items-center rounded-lg bg-gray-800"><span>Full Day</span></div>
            </div>
            <div class="mx-4">
              <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
            </div>
    
        </article>
        </div>
        <div class="swiper-slide">
          <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-xl">
            <div class="max-h-125 overflow-hidden">
                <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/large (3).jpg') }}" alt="">
            </div>
            <div class="flex justify-between mx-5 my-3 ">
                <h3 class="font-oswald text-lg uppercase">Montaña 7 Colores</h3>
                <div class="text-base text-white px-3 flex items-center rounded-lg bg-gray-800"><span>Full Day</span></div>
            </div>
            <div class="mx-4">
              <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
            </div>
  
        </article>
        </div>
        <div class="swiper-slide">
          <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-xl">
            <div class="max-h-125 overflow-hidden">
                <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/sacred-valley.jpg') }}" alt="">
            </div>
            <div class="flex justify-between mx-5 my-3 ">
                <h3 class="font-oswald text-lg uppercase">Valle Sagrado</h3>
                <div class="text-base text-white px-3 flex items-center rounded-lg bg-gray-800"><span>Full Day</span></div>
            </div>
            <div class="mx-4">
              <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
            </div>
    
          </article>
        </div>
        <div class="swiper-slide">
          <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-xl">
            <div class="max-h-125 overflow-hidden">
                <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/qeswachaka-inca-bridge.jpg') }}" alt="">
            </div>
            <div class="flex justify-between mx-5 my-3 ">
                <h3 class="font-oswald text-lg uppercase">Puente Qeswachaka</h3>
                <div class="text-base text-white px-3 flex items-center rounded-lg bg-gray-800"><span>Full Day</span></div>
            </div>
            <div class="mx-4">
              <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
            </div>
        </article>
    
        </div>
        <div class="swiper-slide">
          <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-xl">
            <div class="max-h-125 overflow-hidden">
                <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/waqrapukara-cusco.jpg') }}" alt="">
            </div>
            <div class="flex justify-between mx-5 my-3 ">
                <h3 class="font-oswald text-lg uppercase">Waqrapukara</h3>
                <div class="text-base text-white px-3 flex items-center rounded-lg bg-gray-800"><span>Full Day</span></div>
            </div>
            <div class="mx-4">
              <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
            </div>
        </article>
    
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next" style="color: #fff"></div>
      <div class="swiper-button-prev" style="color: #fff"></div> 
      
    </div>


  </section>
</section>

<section class="py-10">

      <div class="container">
        <h2 class="text-center sm:text-2xl lg:text-3xl font-oswald font-medium tracking-wide text-xl mb-10 uppercase"> The XTREME TOURBULENCIA difference </h2>
        <div class="grid grid-cols-5 gap-5">
            <div class="border text-center p-4 bg-white">
                   <img class="w-20 mx-auto border rounded-full p-3" src="{{ asset('img/call-center.svg') }}" alt=""> 
                  <h4 class="text-2xl">Authentic & Unique</h4>
                <p class="text-sm text-gray-700">Go off the beaten track. Our award-winning, licensed local guides provide incredible insights and insider tips, passionately bringing alive unique and exclusive experiences for you.</p>
            </div>
            <div class="border text-center p-4 bg-white">
                   <img class="w-20 mx-auto border rounded-full p-3" src="{{ asset('img/call-center.svg') }}" alt=""> 
                  <h4 class="text-2xl">Authentic & Unique</h4>
                <p class="text-sm text-gray-700">Go off the beaten track. Our award-winning, licensed local guides provide incredible insights and insider tips, passionately bringing alive unique and exclusive experiences for you.</p>
            </div>
            <div class="border text-center p-4 bg-white">
                   <img class="w-20 mx-auto border rounded-full p-3" src="{{ asset('img/call-center.svg') }}" alt=""> 
                  <h4 class="text-2xl">Authentic & Unique</h4>
                <p class="text-sm text-gray-700">Go off the beaten track. Our award-winning, licensed local guides provide incredible insights and insider tips, passionately bringing alive unique and exclusive experiences for you.</p>
            </div>
            <div class="border text-center p-4 bg-white">
                   <img class="w-20 mx-auto border rounded-full p-3" src="{{ asset('img/call-center.svg') }}" alt=""> 
                  <h4 class="text-2xl">Authentic & Unique</h4>
                <p class="text-sm text-gray-700">Go off the beaten track. Our award-winning, licensed local guides provide incredible insights and insider tips, passionately bringing alive unique and exclusive experiences for you.</p>
            </div>
            <div class="border text-cente bg-whiter p-4">
              <img class="w-20 mx-auto border rounded-full p-3" src="{{ asset('img/call-center.svg') }}" alt=""> 
             <h4 class="text-2xl">Authentic & Unique</h4>
           <p class="text-sm text-gray-700">Go off the beaten track. Our award-winning, licensed local guides provide incredible insights and insider tips, passionately bringing alive unique and exclusive experiences for you.</p>
       </div>
        
        </div>
      </div>


</section>



@endsection

@push('scripts')

@endpush