@extends('layouts.app2')

@section('section_home')

<section class="bg-cover relative bg-center h-150 flex items-center justify-center z-10" style="background-image: url({{ asset('img/slider-salkantay-camp.jpg') }})">
    <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-6xl z-10 font-oswald text-white font-black">SALKANTAY TREK MACHU PICCHU</h1>
    <div class="overlay absolute bg-gray-900 w-full h-full opacity-10"></div>
</section>
<section class="bg-white shadow-md">
        <div class="container max-w-7xl">
                <div class="flex py-5">
                       <div class="p-3 flex-1 text-center border-r border-gray-600">
                           <div class="flex justify-center">
                               <div class="mx-2"><img src="{{ asset('img/duration.svg') }}" class="filter w-12 mx-auto" alt=""></div>
                               <div class="flex-1">
                                <span class="font-oswald tracking-wide  font-medium block">Duration</span>
                                   <span class="mx-1">4 Days - 3 Night</span>
                               </div>
                           </div>
                       </div>
                       <div class="p-3 flex-1 text-center border-r border-gray-600">
                           <div class="flex justify-center">
                               <div class="mx-2"><img src="{{ asset('img/group.svg') }}" class="filter w-12 mx-auto" alt=""></div>
                               <div class="flex-1">
                                <span class="font-oswald tracking-wide  font-medium block">Size</span>
                                   <span class="mx-1">Up to 8 people</span>
                               </div>
                           </div>

                       </div>
                       <div class="p-3 flex-1 text-center border-r border-gray-600">
                           <div class="flex justify-center">
                               <div class="mx-2"><img src="{{ asset('img/altitude.svg') }}" class="filter w-12 mx-auto" alt=""></div>
                               <div class="flex-1">
                                <span class="font-oswald tracking-wide  font-medium block">Max. Altitude</span>
                                   <span class="mx-1">5100m / 16732ft</span>
                               </div>
                           </div>

                       </div>
                       <div class="p-3 flex-1 text-center border-r border-gray-600">
                           <div class="flex justify-center">
                               <div class="mx-2"><img src="{{ asset('img/level2.svg') }}" class="filter w-12 mx-auto" alt=""></div>
                               <div class="flex-1">
                                <span class="font-oswald tracking-wide  font-medium block">Act. Level</span>
                                   <span class="mx-1">Formidable</span>
                               </div>
                           </div>

                       </div>
                       <div class="p-3 flex-1 text-center">
                        <button type="button" class="bg-xtreme-y-500 text-gray-800 border border-gray-400 rounded hover:bg-xtreme-y-600 px-4 py-2 focus:outline-none">Reserve Your Spot</button>
                        </div> 
                </div>
        </div>
</section>
<section class="my-1">
    <div class="container max-w-7xl">
        <ul class="flex text-gray-500 text-sm lg:text-base">
            <li class="inline-flex items-center">
              <a class="font-oswald font-light text-sm tracking-wider" href="/">Home</a>
              <svg
                class="h-5 w-auto text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </li>
            <li class="inline-flex items-center">
              <a class="font-oswald font-light text-sm tracking-wider" href="/components">Treks Salkantay</a>
              <svg
                class="h-5 w-auto text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </li>
            <li class="inline-flex items-center">
              <a class="font-oswald font-light text-sm tracking-wider" href="#" class="text-teal-400">Salkantay Trek 4 Days</a>
            </li>
          </ul>
        
    </div>
</section>

<section>
    <div class="container pb-10 pt-5 max-w-7xl">
        <div class="flex">
            <div class="w-3/5">
                <div class="mx-10">
                     <h2 class="text-3xl font-oswald my-3 border-l-4 border-xtreme-600 pl-2 uppercase">Inca Trail Machu Picchu 4 Days</h2>
                    <p> "The Lares Valley Trek is one of the most picturesque in Cusco, and is home to many traditional weavers and farmers. You’ll visit them to see a weaving demonstration, done in the traditional method, using natural dyes and home-spun yarn.</p> 

                    <p> people live day-to-day, growing what they eat and knitting what they wear. Each day of the trek is reasonably paced with ample time to enjoy the incredible scenery. It’s a challenging trek, but the strenuous hike is amply compensated by the landscape, lunch by cascading waterfalls, and a new understanding of the reality of the Andean farmer. "
                    </p>
                    {{-- <div class="flex justify-around my-2">
                        <button type="button" class="bg-xtreme-y-500 text-gray-800 border border-gray-400 rounded hover:bg-xtreme-y-600 px-4 py-2 focus:outline-none">Contact Us</button>
                        <button type="button" class="bg-xtreme-500 text-white border border-gray-400 rounded hover:bg-xtreme-500 px-4 py-2 focus:outline-none">Whatpsapp</button>
                    </div> --}}
                </div>
            </div>
            <div class="w-2/5">
               <div class="mx-10 border">
                <picture class="shadow-lg">
                    <a data-fancybox="single" href="{{ asset('img/mapa-test.jpg') }}">
                        <img src="{{ asset('img/mapa-test.jpg') }}" class="h-52 w-full cursor-zoom-in" alt="mapa">
                        <figcaption class="text-xs text-center my-1">Mapa Rainbow Mountain</figcaption>
                    </a>                
               </picture>
               </div>
            </div>
        </div>
    </div>
</section>
 <section >
     <div class="bg-gray-100 p-5 border border-gray-300">
        <p class="text-gray text-center">Make it a Private Trip! It's easy, just select "Private" on the booking form. Your group, your dates, hassle-free!
            </p>     
            <div class="text-center">
                <button type="button" class="bg-xtreme-y-500 text-gray-800 border border-gray-300 rounded hover:bg-xtreme-y-600 px-4 py-2 focus:outline-none">Contact Us</button>
            </div>
     </div>
    
</section>

{{-- <section>
    <div class="container max-w-7xl">
            <h3 class="text-3xl font-oswald text-center uppercase my-5 text-gray-800">Video Salkantay Trek</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WgY9GrMQlIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section> --}}

<section class="my-10 tour-main">
    <div class="container max-w-7xl">
        <h3 class="text-3xl font-oswald text-center uppercase my-5 text-gray-800">TRIP DETAILS</h3>


        <div x-data="{active: 0}">
            <div class="flex bg-white border border-gray-200 overflow-hidden -mb-px">
                <button class="px-4 py-2 w-full font-oswald text-white" x-on:click.prevent="active = 0" x-bind:class="{'bg-xtreme-600 text-white': active === 0}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mx-auto mb-1" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                          </svg>
                    </span>
                    OVERVIEW
                </button>
                <button class="px-4 py-2 w-full font-oswald text-white" x-on:click.prevent="active = 1" x-bind:class="{'bg-xtreme-600 text-white': active === 1}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-8 mx-auto mb-1" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </span>
                    ITINERARY
                </button>
                <button class="px-4 py-2 w-full font-oswald text-white" x-on:click.prevent="active = 2" x-bind:class="{'bg-xtreme-600 text-white': active === 2}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mx-auto mb-1" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                          </svg>
                    </span>
                    WHAT'S INCLUDED?
                </button>
                <button class="px-4 py-2 w-full font-oswald text-white" x-on:click.prevent="active = 3" x-bind:class="{'bg-xtreme-600 text-white': active === 3}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mx-auto mb-1" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                    </span>
                    TRAVEL INFO
                </button>
                <button class="px-4 py-2 w-full font-oswald text-white" x-on:click.prevent="active = 4" x-bind:class="{'bg-xtreme-600 text-white': active === 4}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mx-auto mb-1" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
                            <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                          </svg>
                    </span>
                    ENQUIRE NOW
                </button>
            </div>
            <div class="-mt-px">
                <div class="p-4 space-y-2" x-show.transition.in="active === 0">
                    <p>Hiking the Classic Inca Trail to Machu Picchu is the most famous trek in all of Peru if not South America. This sacred path is packed with history and it's only a portion of what it used to be during the days of the Inca empire. In modern times, this 26 mile path is the only way to access Machu Picchu directly after 3 beautiful days of hiking. </p>
                    <p>The Machu Picchu Inca Trail is also the most regulated trek in Peru. The hiking permits, controlled by the government, can only be purchased by licensed operators such as Alpaca Expeditions and we work along with the government rules and regulations.</p>
                    <p>The Alpaca Expeditions Inca Trail tours all include a highly educated tour guide to direct the group and answer all of your questions, a team of porters to transport all the needed equipment and as well as your personal belongings and a trekking chef to provide hot restaurant quality meals at every campsite to guarantee your safety and to ensure you have the energy needed to enjoy your hike.</p>
                    <p>If this Machu Picchu Inca Trail 4 day option feels like too much of a challenge Alpaca Expeditions also offers a 2 day Inca Trail package It has the same attention to detail and service with different features. </p>
                    <p>Or, if you'd like to see the entire trail but want to do it at a slower pace then there is the Machu Picchu Inca Trail 5-Day trek.</p>
                    <p>However, there is another option to make it even MORE challenging, which is the 7-day trek that combines the Salkantay pass with the Inca Trail.</p>
                    <p>No matter which route you choose, we are here to help you find the best match and ensure you have all the permits, equipment and support needed. </p>

                    <h3 class="text-3xl font-oswald tracking-wider font-light text-gray-800 border-l-4 border-xtreme-600 pl-2">Itinerary Overview</h3>
                    <br>

                        <div>
                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                <span class="block font-oswald">DAY 1</span>
                                {{-- <span class="text-2xl">1</span> --}}
                            </div>
                            <div >
                                <div>
                                    <h4 class="font-semibold text-lg text-gray-800">Cusco | Mollepata - Challacancha - Soraypampa - Humantay Lake - Sky Camp</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p>Walk from Challacancha to Soraypampa. Relish in an afternoon visit to the absolutely whimsical Humantay, one of the most beautiful lakes of Peru nestled at the base of Humantay Glacier. Take in your first views of the enigmatic Apu Salkantay. Spend the night in our glass-topped Sky Camp, and stargaze from your bed in our exclusive campsite!</p>
                                </div>
                           </div>
                           
                        </div>

                        <div>
                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                <span class="block font-oswald">DAY 2</span>
                                {{-- <span class="text-2xl">2</span> --}}
                            </div>
                            <div>
                                <div>
                                    <h4 class="font-semibold text-lg text-gray-800">Cusco | Mollepata - Challacancha - Soraypampa - Humantay Lake - Sky Camp</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p>Walk from Challacancha to Soraypampa. Relish in an afternoon visit to the absolutely whimsical Humantay, one of the most beautiful lakes of Peru nestled at the base of Humantay Glacier. Take in your first views of the enigmatic Apu Salkantay. Spend the night in our glass-topped Sky Camp, and stargaze from your bed in our exclusive campsite!</p>
                                </div>
                           </div>
                           
                        </div>

                        <div>
                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                <span class="block font-oswald">DAY 3</span>
                                {{-- <span class="text-2xl">3</span> --}}
                            </div>
                            <div>
                                <div>
                                    <h4 class="font-semibold text-lg text-gray-800">Cusco | Mollepata - Challacancha - Soraypampa - Humantay Lake - Sky Camp</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p>Walk from Challacancha to Soraypampa. Relish in an afternoon visit to the absolutely whimsical Humantay, one of the most beautiful lakes of Peru nestled at the base of Humantay Glacier. Take in your first views of the enigmatic Apu Salkantay. Spend the night in our glass-topped Sky Camp, and stargaze from your bed in our exclusive campsite!</p>
                                </div>
                           </div>
                           
                        </div>

                        <div>
                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                <span class="block font-oswald">DAY 4</span>
                                {{-- <span class="text-2xl">4</span> --}}
                            </div>
                            <div>
                                <div>
                                    <h4 class="font-semibold text-lg text-gray-800">Cusco | Mollepata - Challacancha - Soraypampa - Humantay Lake - Sky Camp</h4>
                                </div>
                                <div class="overflow-hidden">
                                    <p>Walk from Challacancha to Soraypampa. Relish in an afternoon visit to the absolutely whimsical Humantay, one of the most beautiful lakes of Peru nestled at the base of Humantay Glacier. Take in your first views of the enigmatic Apu Salkantay. Spend the night in our glass-topped Sky Camp, and stargaze from your bed in our exclusive campsite!</p>
                                </div>
                           </div>
                           
                        </div>

                </div>
                <div class="p-4 space-y-2" x-show.transition.in="active === 1">

                        <div class="flex">
                            
                                <div class="w-full">
                                        <div class="my-4">
                                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                                <span class="block font-oswald">DAY</span>
                                                <span class="text-2xl">1</span>
                                            </div>
                                            <div class="day">
                                                <div>
                                                    <h4 class="font-oswald text-2xl text-gray-800">(Hiking Begins) SORAYPAMPA CAMPSITE – HUMANTAY LAGOON – SALKANTAY PASS - WAYRACPUNKO</h4>
                                                </div>
                                                <div class="overflow-hidden py-2">
                                                    <p class="tracking-wide">After a good night’s rest, you’ll wake up early to enjoy your breakfast before your trek. During the morning there’ll be a short team introduction between all Salkantay trekkers and the Alpaca Expeditions Staff to ensure a positive family-like experience.</p>

                                                    <p class="tracking-wide">Following the introduction, you’ll give your duffel bag to the muleteers to carry to the next campsite. The day's hike will begin with a 1.5 hour steady uphill hike to the renowned Humantay Lagoon. The serene views of the crystalline-blue water of Humantay Lagoon are absolutely incredible. If the skies are clear you’ll see the first sun rays peeking through the snow-covered peaks.</p>

                                                    <p class="tracking-wide">And!... If you’re brave, you’ll have the chance to touch the almost-frozen water that locals believe can help you stay young forever! The advantage of visiting Humantay Lagoon in the early morning hours is the quiet surroundings with no other Salkantay trekkers besides those in your group. Due to the popularity of this location, this isn’t something everyone can enjoy!</p>

                                                    <p class="tracking-wide">After breathing it all in you’ll begin your way back to the starting point to continue to the lunch spot in Soyroccocha. This portion of the Salkantay hike will be approximately 3 hours on gradually ascending terrain. On your way, you’ll pass breathtaking places such as Salkantay Pampa, which means outstanding views of the surrounding snow-covered mountains. These views are what make the journey the destination.</p>

                                                    <p class="tracking-wide">After lunch made by your Alpaca Expeditions local chef and a well-deserved rest, you’ll continue with you’re the next leg of your Salkantay hike. This next portion continues on for about 1 hour until you arrive at Salkantay Pass at 4,650 meters above sea level. This is the highest point of the trek. The group will rest there and you’ll be served hot drinks while you enjoy the views.</p>

                                                    <p class="tracking-wide">From Salkantay Pass, you’ll be on the last leg of the hike for the day, which is a 3 hour downhill trek to the evening’s campsite, Wayracmachay. When you arrive at the campsite the Salkantay trekking staff will have your tents all set up and your duffel bags ready.</p>

                                                    <p class="tracking-wide">Alpaca Expeditions’ team will provide you with warm water to get washed up from the day so you can change into some fresh warmer clothes for the night. Then there is a happy hour with hot chocolate and coffee followed by dinner. If the weather allows, you’ll get to enjoy the unbroken views of the sky along with a brief introduction to the visible Inca constellation</p>

                                                         <div class="flex  p-3 my-4">
                                                             
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/difficulty.svg') }}" alt=""> <span><b>Level of difficulty</b>: moderate</span></div>
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/time.svg') }}" alt=""> <span><b>Hiking time</b>: 6-7 hours</span></div>
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/walking.svg')}}" alt=""> <span><b>Total distance</b>: 11 km/6.8 m</span></div>

                                                         </div>

                                                    
                                                        <div class="swiper-container tour my-5">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/11.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/11.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/22.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/22.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/33.png') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/33.png') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/44.png') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/44.png') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/11.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/11.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/22.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/22.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                          </div>
                                                    

                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                                <span class="block font-oswald">DAY</span>
                                                <span class="text-2xl">2</span>
                                            </div>
                                            <div class="day">
                                                <div>
                                                    <h4 class="font-oswald text-2xl text-gray-800">(Hiking Begins) SORAYPAMPA CAMPSITE – HUMANTAY LAGOON – SALKANTAY PASS - WAYRACPUNKO</h4>
                                                </div>
                                                <div class="overflow-hidden py-2">
                                                    <p class="tracking-wide">After a good night’s rest, you’ll wake up early to enjoy your breakfast before your trek. During the morning there’ll be a short team introduction between all Salkantay trekkers and the Alpaca Expeditions Staff to ensure a positive family-like experience.</p>

                                                    <p class="tracking-wide">Following the introduction, you’ll give your duffel bag to the muleteers to carry to the next campsite. The day's hike will begin with a 1.5 hour steady uphill hike to the renowned Humantay Lagoon. The serene views of the crystalline-blue water of Humantay Lagoon are absolutely incredible. If the skies are clear you’ll see the first sun rays peeking through the snow-covered peaks.</p>

                                                    <p class="tracking-wide">And!... If you’re brave, you’ll have the chance to touch the almost-frozen water that locals believe can help you stay young forever! The advantage of visiting Humantay Lagoon in the early morning hours is the quiet surroundings with no other Salkantay trekkers besides those in your group. Due to the popularity of this location, this isn’t something everyone can enjoy!</p>

                                                    <p class="tracking-wide">After breathing it all in you’ll begin your way back to the starting point to continue to the lunch spot in Soyroccocha. This portion of the Salkantay hike will be approximately 3 hours on gradually ascending terrain. On your way, you’ll pass breathtaking places such as Salkantay Pampa, which means outstanding views of the surrounding snow-covered mountains. These views are what make the journey the destination.</p>

                                                    <p class="tracking-wide">After lunch made by your Alpaca Expeditions local chef and a well-deserved rest, you’ll continue with you’re the next leg of your Salkantay hike. This next portion continues on for about 1 hour until you arrive at Salkantay Pass at 4,650 meters above sea level. This is the highest point of the trek. The group will rest there and you’ll be served hot drinks while you enjoy the views.</p>

                                                    <p class="tracking-wide">From Salkantay Pass, you’ll be on the last leg of the hike for the day, which is a 3 hour downhill trek to the evening’s campsite, Wayracmachay. When you arrive at the campsite the Salkantay trekking staff will have your tents all set up and your duffel bags ready.</p>

                                                    <p class="tracking-wide">Alpaca Expeditions’ team will provide you with warm water to get washed up from the day so you can change into some fresh warmer clothes for the night. Then there is a happy hour with hot chocolate and coffee followed by dinner. If the weather allows, you’ll get to enjoy the unbroken views of the sky along with a brief introduction to the visible Inca constellation</p>

                                                         <div class="flex  p-3 my-4">
                                                             
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/difficulty.svg') }}" alt=""> <span><b>Level of difficulty</b>: moderate</span></div>
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/time.svg') }}" alt=""> <span><b>Hiking time</b>: 6-7 hours</span></div>
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/walking.svg')}}" alt=""> <span><b>Total distance</b>: 11 km/6.8 m</span></div>

                                                         </div>

                                                    
                                                        <div class="swiper-container tour my-5">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/11.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/11.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/22.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/22.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/33.png') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/33.png') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/44.png') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/44.png') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/11.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/11.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/22.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/22.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                          </div>
                                                    

                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <div class="float-left px-2 py-1 bg-xtreme-y-500 mr-2 border border-gray-400 text-gray-800 rounded-md text-center">
                                                <span class="block font-oswald">DAY</span>
                                                <span class="text-2xl">3</span>
                                            </div>
                                            <div class="day">
                                                <div>
                                                    <h4 class="font-oswald text-2xl text-gray-800">(Hiking Begins) SORAYPAMPA CAMPSITE – HUMANTAY LAGOON – SALKANTAY PASS - WAYRACPUNKO</h4>
                                                </div>
                                                <div class="overflow-hidden py-2">
                                                    <p class="tracking-wide">After a good night’s rest, you’ll wake up early to enjoy your breakfast before your trek. During the morning there’ll be a short team introduction between all Salkantay trekkers and the Alpaca Expeditions Staff to ensure a positive family-like experience.</p>

                                                    <p class="tracking-wide">Following the introduction, you’ll give your duffel bag to the muleteers to carry to the next campsite. The day's hike will begin with a 1.5 hour steady uphill hike to the renowned Humantay Lagoon. The serene views of the crystalline-blue water of Humantay Lagoon are absolutely incredible. If the skies are clear you’ll see the first sun rays peeking through the snow-covered peaks.</p>

                                                    <p class="tracking-wide">And!... If you’re brave, you’ll have the chance to touch the almost-frozen water that locals believe can help you stay young forever! The advantage of visiting Humantay Lagoon in the early morning hours is the quiet surroundings with no other Salkantay trekkers besides those in your group. Due to the popularity of this location, this isn’t something everyone can enjoy!</p>

                                                    <p class="tracking-wide">After breathing it all in you’ll begin your way back to the starting point to continue to the lunch spot in Soyroccocha. This portion of the Salkantay hike will be approximately 3 hours on gradually ascending terrain. On your way, you’ll pass breathtaking places such as Salkantay Pampa, which means outstanding views of the surrounding snow-covered mountains. These views are what make the journey the destination.</p>

                                                    <p class="tracking-wide">After lunch made by your Alpaca Expeditions local chef and a well-deserved rest, you’ll continue with you’re the next leg of your Salkantay hike. This next portion continues on for about 1 hour until you arrive at Salkantay Pass at 4,650 meters above sea level. This is the highest point of the trek. The group will rest there and you’ll be served hot drinks while you enjoy the views.</p>

                                                    <p class="tracking-wide">From Salkantay Pass, you’ll be on the last leg of the hike for the day, which is a 3 hour downhill trek to the evening’s campsite, Wayracmachay. When you arrive at the campsite the Salkantay trekking staff will have your tents all set up and your duffel bags ready.</p>

                                                    <p class="tracking-wide">Alpaca Expeditions’ team will provide you with warm water to get washed up from the day so you can change into some fresh warmer clothes for the night. Then there is a happy hour with hot chocolate and coffee followed by dinner. If the weather allows, you’ll get to enjoy the unbroken views of the sky along with a brief introduction to the visible Inca constellation</p>

                                                         <div class="flex  p-3 my-4">
                                                             
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/difficulty.svg') }}" alt=""> <span><b>Level of difficulty</b>: moderate</span></div>
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/time.svg') }}" alt=""> <span><b>Hiking time</b>: 6-7 hours</span></div>
                                                                <div class="flex-1"><img class="w-6 inline-block" src="{{ asset('img/walking.svg')}}" alt=""> <span><b>Total distance</b>: 11 km/6.8 m</span></div>

                                                         </div>

                                                    
                                                        <div class="swiper-container tour my-5">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/11.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/11.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/22.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/22.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/33.png') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/33.png') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/44.png') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/44.png') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/11.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/11.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <a data-fancybox="gallery" data-src="{{ asset('img/22.jpg') }}"><img class="h-56 cursor-pointer" src="{{ asset('img/22.jpg') }}" alt="inca trail"></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                          </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        

                                        
                                
                                </div>

                                {{-- <div class="w-1/4 px-5">
                                    <img class="my-2 border-4 border-double " src="{{ asset('img/22.jpg') }}" alt="">
                                    <img class="my-2 border-4 border-double " src="{{ asset('img/22.jpg') }}" alt="">
                                </div>   --}}

                        </div>

                    

                </div>
                <div class="p-4 space-y-2" x-show.transition.in="active === 2">
                    
                   <div class="mx-3">
                    <h3 class="text-2xl font-oswald tracking-wider  text-gray-800 border-l-4 border-xtreme-600 pl-2 my-4">TOUR INCLUDE</h3>

                    <ul class="list-outside pl-8 list-disc">
                        <li>Private transfer from your hotel in Cusco to km 82.</li>
                        <li>Tourist train from Aguas Calientes to Cusco/Poroy or Ollantaytambo and bus to Cusco.</li>
                        <li>One-way bus from Machu Picchu to Aguas Calientes.</li>
                        <li>Transfer from the train station in Cusco/Poroy to your hotel in Cusco.</li>
                        <li>Entrance fees to the Inca trail and Machu Picchu.</li>
                        <li>Professional bilingual guide (Spanish and English).</li>
                        <li>Camping equipment (professional two-person tents: Doite, model Cima 4, extra light/4kg, Doite, model Kailas 3, extra light/4.5kg and Doite, model Himalaya, extra light/4.5kg; sleeping mats, dining tent equipped with table and chairs, a sanitary tent).</li>
                        <li>Chef, cooking equipment, meals (3 breakfasts, 3 lunches and 3 dinners). Our delicious meals include pancakes, omelets, fresh fruit for breakfast, and spaghetti, chicken, fish, meat and rice for lunch and dinner.  All meals are rich in carbohydrates suitable for trekking.  Hot drinks are included, especially coca-leaf tea, used for strength and adapting to high-altitude.</li>
                        <li>Daily snack time: tea, coffee, wanton, popcorn, and crackers.</li>
                        <li>Porters to carry the trek and cooking equipment, plus your sleeping mat and bag.</li>
                        <li>First-aid kit and oxygen bottle.</li>
                        <li>Unlimited cold, boiled water available during the trek.</li>

                    </ul>

                    <h3 class="text-2xl font-oswald tracking-wider  text-gray-800 border-l-4 border-xtreme-600 pl-2 my-4">TOUR NOT INCLUDE</h3>

                    <ul class="list-outside pl-8 list-disc">
                        <li>Private transfer from your hotel in Cusco to km 82.</li>
                        <li>Tourist train from Aguas Calientes to Cusco/Poroy or Ollantaytambo and bus to Cusco.</li>
                        <li>One-way bus from Machu Picchu to Aguas Calientes.</li>
                        <li>Transfer from the train station in Cusco/Poroy to your hotel in Cusco.</li>
                        <li>Entrance fees to the Inca trail and Machu Picchu.</li>
                        <li>Professional bilingual guide (Spanish and English).</li>
                        <li>Camping equipment (professional two-person tents: Doite, model Cima 4, extra light/4kg, Doite, model Kailas 3, extra light/4.5kg and Doite, model Himalaya, extra light/4.5kg; sleeping mats, dining tent equipped with table and chairs, a sanitary tent).</li>
                        <li>Chef, cooking equipment, meals (3 breakfasts, 3 lunches and 3 dinners). Our delicious meals include pancakes, omelets, fresh fruit for breakfast, and spaghetti, chicken, fish, meat and rice for lunch and dinner.  All meals are rich in carbohydrates suitable for trekking.  Hot drinks are included, especially coca-leaf tea, used for strength and adapting to high-altitude.</li>
                        <li>Daily snack time: tea, coffee, wanton, popcorn, and crackers.</li>
                        <li>Porters to carry the trek and cooking equipment, plus your sleeping mat and bag.</li>
                        <li>First-aid kit and oxygen bottle.</li>
                        <li>Unlimited cold, boiled water available during the trek.</li>

                    </ul>
                   </div>

                </div>
                <div class="p-4 space-y-2" x-show.transition.in="active === 3">
                    
                    <div class="mx-3">
                        <h3 class="text-2xl font-oswald tracking-wider  text-gray-800 border-l-4 border-xtreme-600 pl-2 my-4">WHAT DO I NEED TO BRING?</h3>
    
                                <ul class="list-outside pl-8 list-disc">
                                    <li>Backpack with rain cover (30- or 40-liter capacity is sufficient).</li>
                                    <li>Clothing for both warm and cold climates.</li>
                                    <li>Trekking shoes/boots.</li>
                                    <li>Slippers or sandals (for showers and hot springs).</li>
                                    <li>Woolen/synthetic socks and a sweater.</li>
                                    <li>Long- and short-sleeved T-shirts.</li>
                                    <li>Rain poncho/waterproof jacket and a hat.</li>
                                    <li>Bathing suit (for the hot springs in Aguas Calientes).</li>
                                    <li>Sunscreen, insect repellent, toilet paper, hand cleaner/disinfecting alcohol gel.</li>
                                    <li>Camera (with rain protection), a flash light/headlamp and extra batteries.</li>
                                    <li>Snacks (e.g. chocolate bars and dried fruit)</li>
                                    <li>Original passport, original ISIC student card (to receive the student discount) and extra money in soles.</li>
                                    <li>Since the weather can be very cold and rainy, your clothes – once wet – won’t dry at night. It’s best to take some clothes to change.</li>
                                </ul>
    
                        <h3 class="text-2xl font-oswald tracking-wider  text-gray-800 border-l-4 border-xtreme-600 pl-2 my-4">NOTES:</h3>
    
                                <ul class="list-outside pl-8 list-decimal">
                                    <li>Permission to hike Wayna Picchu: Permission requires booking months in advance with an additional charge $70.00USD to guarantee your entrance.</li>
                                    <li>Extra porter: We can arrange for a porter to carry your backpack/luggage if your luggage weighs 15kg/33lb or less (the weight limit is mandated by Peruvian law 26702). The cost is $140.00USD, and includes transport, entrance fee to the Inca Trail, food and camping equipment for the porter.</li>
                                    <li>Tips: Porters, cooks and guides always appreciate tips for their services. The porters are also grateful for small donations of clothes and school supplies for their children.</li>
                                    <li>Camping sites: The camping sites described in our itinerary (Yuncachimpa, Chaquicocha and Wiñaywayna) may be changed due to availability and restrictions on the number of trekkers. In high season (May-September) some campsites, such as Wiñaywayna, are almost always full. If the campsites are full, the Ministry of Culture (the government entity which supervises and controls the Inca Trail) will assign other campsites (Wayllabamba, Pacaymayu and Phuyupatamarca) as needed.</li>
                                    <li>Return ticket: We’ll leave Aguas Calientes by train either at 2:55pm or 6:45pm. The schedule depends on ticket availability and on how far in advance you book your trip. In the afternoon, you can have lunch in one of many good restaurants in Aguas Calientes or relax in the natural springs. Depending on which train you take, you’ll arrive at your hotel in Cusco at about 6:00pm or 10:00pm.</li>
                                    <li>Health considerations: It is a common misconception that because many people do the Inca Trail, it’s easy. It is not. The Trail is 45km/26 m long and involves great physical exertion to complete. Combined with the high altitude and potential extreme weather, the trek can be difficult. Therefore, we strongly recommend you are well acclimatized to high altitudes, in good physical condition and healthy. You must declare any medical issues in advance and bring your own medications. We want you to enjoy your trip and be safe!</li>
                                    <li>Weather: The Andean weather can be unpredictable, despite the sharp divide between dry and wet seasons. The dry season runs from May to October or November; the rainy season goes from December through April. Nevertheless, Inca Trail lies in forested areas and high-altitude where the weather is unpredictable and can change within hours.</li>
                                </ul>
                       </div>
                </div>
                <div class="p-4 space-y-2" x-show.transition.in="active === 4">
                    
                    <p>Panel sdt</p>
                </div>
            </div>
        </div>
    </div>


</section>
<section class=""> 
    <div class="container max-w-7xl">
            <h4 class="text-3xl py-7 font-oswald tracking-wider  text-gray-800 text-center">TRIP ADVISOR RATING</h4>
            <span class="max-w-xs h-1 w-32 bg-green-800 sm:block mx-auto -mt-4 mb-5 hidden "></span>

            <img class="w-2/4 mx-auto" src="{{ asset('img/Food-at-the-Inca-Trail.jpg') }}" alt="">
    </div>
</section>
@endsection