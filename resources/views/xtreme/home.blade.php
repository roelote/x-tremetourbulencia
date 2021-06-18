@extends('layouts.app2')

@section('section_home')

    <section>
        <div>
            <img src="{{ asset('img/slider-salkantay-camp.jpg') }}" alt="">
        </div>
    </section>

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
              <article class="mx-auto group w-full shadow-2xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer">
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

              <article class="mx-auto group w-full shadow-2xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer group">
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

              <article class="mx-auto group w-full shadow-2xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer">
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

              <article class="mx-auto group w-full shadow-2xl max-w-md pb-8  transform duration-500 hover:-translate-y-2 cursor-pointer">
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

<section class="flex items-center justify-center  m-auto mb-5 bg-fixed bg-center bg-cover relative bg-gradient-to-tl from-xtreme-500 to-xtreme-700" >
  <div class="p-10  py-10  flex  flex-col  flex-wrap  justify-center  content-center z-20">
   
    <h4 class="font-oswald text-3xl text-xtreme-y-500 uppercase tracking-wide text-center ">Your Safety is our Priority </h4>
    <h5 class="font-oswald text-base text-white tracking-wide text-center my-2">Explore with Confidence</h5>
    
  </div>
  {{-- <div class="overlay absolute bg-gray-900 w-full h-full opacity-30"></div> --}}
</section>




<section class="container mx-auto p-10 md:py-20 px-5 md:p-10 md:px-0">
  <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-10">
      <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
          <div class="max-h-125 overflow-hidden">
              <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/large (3).jpg') }}" alt="">
          </div>
          <div class="flex justify-between mx-5 my-3 ">
              <h3 class="font-oswald text-lg uppercase">Rainbow Mountain Full Day</h3>
              <div class="text-base text-right text-white border px-3 rounded-lg bg-red-500">Full Day</div>
          </div>
          <div class="mx-4">
            <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
          </div>
  
      </article>

      <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
        <div class="max-h-125 overflow-hidden">
            <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/large (3).jpg') }}" alt="">
        </div>
        <div class="flex justify-between mx-5 my-3 ">
            <h3 class="font-oswald text-lg uppercase">Rainbow Mountain Full Day</h3>
            <div class="text-base text-right text-white border px-3 rounded-lg bg-red-500">Full Day</div>
        </div>
        <div class="mx-4">
          <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
        </div>

    </article>

    <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
      <div class="max-h-125 overflow-hidden">
          <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/large (3).jpg') }}" alt="">
      </div>
      <div class="flex justify-between mx-5 my-3 ">
          <h3 class="font-oswald text-lg uppercase">Rainbow Mountain Full Day</h3>
          <div class="text-base text-right text-white border px-3 rounded-lg bg-red-500">Full Day</div>
      </div>
      <div class="mx-4">
        <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
      </div>

  </article>
  <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
    <div class="max-h-125 overflow-hidden">
        <img class="transform duration-300 group-hover:scale-110" src="{{ asset('img/large (3).jpg') }}" alt="">
    </div>
    <div class="flex justify-between mx-5 my-3 ">
        <h3 class="font-oswald text-lg uppercase">Rainbow Mountain Full Day</h3>
        <div class="text-base text-right text-white border px-3 rounded-lg bg-red-500">Full Day</div>
    </div>
    <div class="mx-4">
      <p class="text-sm text-gray-700">Walk the path of an Inca to Machu Picchu. This trail is full of history with ruins to enjoy every day (without crowds).</p>
    </div>

</article>

  </section>
  
</section>

<section class="h-96">

</section>






@endsection