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
            <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 mt-10">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                              <svg class="w-6 h-6 ml-2 place-items-end relative" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                              <span class="place-items-end">Book Now</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                              </svg>
                                <svg class="w-6 h-6 ml-2 place-items-end relative" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                              </svg>
                              <span class="place-items-end">Book Now</span>
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
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                              <svg class="w-6 h-6 ml-2 place-items-end relative" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                              <span class="place-items-end">Book Now</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                            <svg class="w-6 h-6 ml-2 place-items-end relative" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                              <span class="place-items-end">Book Now</span>
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

<section class="flex items-center justify-center  m-auto mb-5 bg-fixed bg-center bg-cover relative bg-xtreme-500" >
  <div class="p-10  py-14  flex  flex-col  flex-wrap  justify-center  content-center z-20">
   
    <h4 class="font-oswald text-3xl text-xtreme-y-500 uppercase tracking-wide text-center ">Your Safety is our Priority </h4>
    <h5 class="font-oswald text-base text-white tracking-wide text-center my-2">Explore with Confidence</h5>
    <p class="max-w-3xl text-white text-base my-1 text-center"> We are committed to ensuring the safety and wellbeing of our travelers, and the people and communities impacted by our trips. As firm believers in the human urge to explore and learn, even in times of social distancing, we have established an enhanced set of security guidelines to guarantee the optimal travel experience.</p>

    <div class="flex justify-center my-3">
      <button type="button" class="border border-white text-white-500 text-white hover:bg-teal-500 hover:text-gray-100 rounded px-12 py-2 ">More Information</button>
    </div>
    
  </div>
  {{-- <div class="overlay absolute bg-gray-900 w-full h-full opacity-30"></div> --}}
</section>




<section class="container mx-auto p-10 md:py-20 px-5 md:p-10 md:px-0">
  <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10">
      <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
          <div class="max-h-125 overflow-hidden">
              <img class="transform duration-300 group-hover:scale-110" src="https://images.unsplash.com/photo-1615319532762-b4ccc69e5abf?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTA3fHxsYW5kc2NhcGV8ZW58MHx8MHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=100" alt="">
          </div>
          <div class="flex justify-between my-5 ">
              <div class="text-orange-500 text-base font-semibold">California</div>
              <div class="text-base text-right"><span class="font-bold">87</span>/Day</div>
          </div>
          <h2 class="font-bold text-2xl">Photo by <a target="_blank" href="https://unsplash.com/photos/YgCmUdaFkHo">Drew
      Dao</a> </h2>
          <div class="flex justify-between items-center mt-3 ">
              <div class="text-base uppercase font-semibold text-gray-500">15 Days Tour</div>
              <div class="text-base text-right">
                  <div class="flex">
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                  </div>
              </div>
          </div>
      </article>

      <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
          <div class="max-h-125 overflow-hidden">
              <img class="transform duration-300 group-hover:scale-110" src="https://images.unsplash.com/photo-1562981943-dda9d14477f0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTE4fHxsYW5kc2NhcGV8ZW58MHx8MHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=100" alt="">
          </div>
          <div class="flex justify-between my-5 ">
              <div class="text-orange-500 text-base font-semibold">San Diego, California</div>
              <div class="text-base text-right"><span class="font-bold">75</span>/Day</div>
          </div>
          <h2 class="font-bold text-2xl">Photo by <a target="_blank" href="https://unsplash.com/photos/xYdxw6C3tSA">Trent
      Haaland</a></h2>
          <div class="flex justify-between items-center mt-3 ">
              <div class="text-base uppercase font-semibold text-gray-500">21 Days Tour</div>
              <div class="text-base text-right">
                  <div class="flex">
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                  </div>
              </div>
          </div>
      </article>

      <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
          <div class="max-h-125 overflow-hidden">
              <img class="transform duration-300 group-hover:scale-110" src="https://images.unsplash.com/photo-1475066392170-59d55d96fe51?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=100" alt="">
          </div>
          <div class="flex justify-between my-5 ">
              <div class="text-orange-500 text-base font-semibold">Aksla Viewpoint, Alesund, Norway</div>
              <div class="text-base text-right"><span class="font-bold">176</span>/Day</div>
          </div>
          <h2 class="font-bold text-2xl">Photo by <a target="_blank" href="https://unsplash.com/photos/3-MftKobVtg">Jarand
      K. Løkeland</a></h2>
          <div class="flex justify-between items-center mt-3 ">
              <div class="text-base uppercase font-semibold text-gray-500">24 Days Tour</div>
              <div class="text-base text-right">
                  <div class="flex">
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                  </div>
              </div>
          </div>
      </article>

      <article class="mx-auto pb-5 max-w-sm transform duration-500 hover:-translate-y-1 cursor-pointer group shadow-2xl">
          <div class="max-h-125 overflow-hidden">
              <img class="transform duration-300 group-hover:scale-110" src="https://images.unsplash.com/photo-1459787915554-b34915863013?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=887&amp;q=100" alt="">
          </div>
          <div class="flex justify-between my-5 ">
              <div class="text-orange-500 text-base font-semibold">Dubai, United Arab Emirates</div>
              <div class="text-base text-right"><span class="font-bold">120</span>/Day</div>
          </div>
          <h2 class="font-bold text-2xl">Photo by <a target="_blank" href="https://unsplash.com/photos/CwJb7ly-iqc">Ashim
      D'Silva</a></h2>
          <div class="flex justify-between items-center mt-3 ">
              <div class="text-base uppercase font-semibold text-gray-500">10 Days Tour</div>
              <div class="text-base text-right">
                  <div class="flex">
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                      <svg class="w-4 h-4 mx-px fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
          <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z"></path>
        </svg>
                  </div>
              </div>
          </div>
      </article>
  </section>
  
</section>

<section class="h-96">

</section>




    {{-- <section class="my-4 bg-gray-100">
      <div class="container max-w-6xl">
        <div class="swiper-container mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide border bg-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. A totam alias earum debitis doloremque omnis perferendis pariatur error optio impedit architecto quaerat ab harum, soluta dignissimos atque animi repudiandae blanditiis?</div>
            <div class="swiper-slide border">Lorem ipsum dolor sit amet consectetur adipisicing elit. A totam alias earum debitis doloremque omnis perferendis pariatur error optio impedit architecto quaerat ab harum, soluta dignissimos atque animi repudiandae blanditiis?</div>
            <div class="swiper-slide border">Lorem ipsum dolor sit amet consectetur adipisicing elit. A totam alias earum debitis doloremque omnis perferendis pariatur error optio impedit architecto quaerat ab harum, soluta dignissimos atque animi repudiandae blanditiis?</div>
 

          </div>
         
        </div>
      </div>

    </section> --}}

@endsection