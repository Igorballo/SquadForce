<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-700">
    <div class="pb-20">
        <!-- Header section -->
        <div class="pattern" >
            <div class="w-full">
                <div class="container mx-auto flex flex-col md:flex-row md:justify-between bg-gray-700 h-28 md:h-12 items-center justify-center space-y-6 md:space-y-0 px-3 md:px-10">
                    <ul class="flex space-x-3">
                        <li class="flex justify-center items-center h-7 w-7 rounded-full bg-gray-100"><img class="w-4 h-4" src="svg/twitch.svg" alt="twitch"></li>
                        <li class="flex justify-center items-center h-7 w-7 rounded-full bg-gray-100"><img class="w-4 h-4" src="svg/youtube.svg" alt="youtube"></li>
                        <li class="flex justify-center items-center h-7 w-7 rounded-full bg-gray-100"><img class="w-4 h-4" src="svg/github.svg" alt="github"></li>
                        <li class="flex justify-center items-center h-7 w-7 rounded-full bg-gray-100"><img class="w-4 h-4" src="svg/facebook.svg" alt="facebook"></li>
                        <li class="flex justify-center items-center h-7 w-7 rounded-full bg-gray-100"><img class="w-4 h-4" src="svg/twitter.svg" alt="twitter"></li>
                        <li class="flex justify-center items-center h-7 w-7 rounded-full bg-gray-100"><img class="w-4 h-4" src="svg/discord.svg" alt="discord"></li>
                    </ul>
                    <ul class="flex space-x-16">         
                        <li class=""><img class="w-4 h-4" src="svg/search.svg" alt="search"></li>
                        <li class=""><img class="w-4 h-4" src="svg/logout.svg" alt="logout"></li>
                        <li class=""><img class="w-4 h-4" src="svg/shopping.svg" alt="shopping"></li>
                    </ul>
                </div>
            </div>

            <!-- navbar section -->
            <div class="w-full bg-gray-900">
                <div class="container mx-auto flex justify-between items-center h-32 xl:h-32 px-3 md:px-10 bg-gray-900">
                    <img class="flex-none h-16" src="svg/squadforce.svg" alt="squadforce">
                    <button class="xl:hidden">
                        <svg class="w-10 h-10" fill="none" stroke="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <ul class="hidden xl:flex xl:gap-x-10 text-white">
                        <li class="uppercase font-bold text-xl"><a href="#">Features +</a></li>
                        <li class="uppercase font-bold text-xl"><a href="#">Blog +</a></li>
                        <li class="uppercase font-bold text-xl"><a href="#">Gallery</a></li>
                        <li class="uppercase font-bold text-xl"><a href="#">Esport +</a></li>
                        <li class="uppercase font-bold text-xl"><a href="#">Shop +</a></li>
                        <li class="uppercase font-bold text-xl"><a href="#">Buy now</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Body section -->
        <div class="w-full bg-gray-700 bg-transparent mt-8">
            <!-- caroussel section -->
            <div class="container mx-auto px-3 md:px-10">
                <div class="carousel w-full rounded-lg h-[65vh] border-b-4 border-sf-pink
                    <div id="item1" class="carousel-item w-full relative">
                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-41.jpg" class="w-full" />
                        <div class="absolute top-6 right-6 bottom-6 p-8 w-1/3 rounded-lg bg-gray-900 opacity-100 bg-opacity-90 text-white">
                            <div class="h-full overflow-auto space-y-6 pb-16 scrollbar-thin">
                                <p class="text-2xl uppercase font-bold">At length one of them called out in a clear</p>
                                <p class="text-lg font-semibold leading-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                                <button class="uppercase text-black bg-white px-6 py-2 rounded-lg font-bold text-lg">Read more</button>
                            </div>
                            <div class="absolute bottom-0 inset-x-0 h-16">
                                <div class="carousel carousel-end h-16 rounded-xl rounded-b rounded-t-none">
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-31.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-21.jpg" alt="Drink" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-51.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="item2" class="carousel-item w-full relative">
                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-51.jpg" class="w-full" />
                        <div class="absolute top-6 right-6 bottom-6 p-8 w-1/3 rounded-lg bg-gray-900 opacity-100 bg-opacity-90 text-white">
                            <div class="h-full overflow-auto space-y-6 pb-16 scrollbar-thin">
                                <p class="text-2xl uppercase font-bold">For good, too though in consequence</p>
                                <p class="text-lg font-semibold leading-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl
                                </p>
                                <button class="uppercase text-black bg-white px-6 py-2 rounded-lg font-bold text-lg">Read more</button>
                            </div>
                            <div class="absolute bottom-0 inset-x-0 h-16">
                                <div class="carousel carousel-end h-16 rounded-xl rounded-b rounded-t-none">
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-31.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-21.jpg" alt="Drink" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-51.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="item3" class="carousel-item w-full relative">
                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" class="w-full" />
                        <div class="absolute top-6 right-6 bottom-6 p-8 w-1/3 rounded-lg bg-gray-900 opacity-100 bg-opacity-90 text-white">
                            <div class="h-full overflow-auto space-y-6 pb-16 scrollbar-thin">
                                <p class="text-2xl uppercase font-bold">As we passed, I remarked</p>
                                <p class="text-lg font-semibold leading-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                </p>
                                <button class="uppercase text-black bg-white px-6 py-2 rounded-lg font-bold text-lg">Read more</button>
                            </div>
                            <div class="absolute bottom-0 inset-x-0 h-16">
                                <div class="carousel carousel-end h-16 rounded-xl rounded-b rounded-t-none">
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-31.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-21.jpg" alt="Drink" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-51.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item4" class="carousel-item w-full relative">
                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-21.jpg" class="w-full" />
                        <div class="absolute top-6 right-6 bottom-6 p-8 w-1/3 rounded-lg bg-gray-900 opacity-100 bg-opacity-90 text-white">
                            <div class="h-full overflow-auto space-y-6 pb-16 scrollbar-thin">
                                <p class="text-2xl uppercase font-bold">He made his passenger captain of one</p>
                                <p class="text-lg font-semibold leading-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.
                                </p>
                                <!-- <button class="uppercase text-black bg-white px-6 py-2 rounded-lg font-bold text-lg">Read more</button> -->
                            </div>
                            <div class="absolute bottom-0 inset-x-0 h-16">
                                <div class="carousel carousel-end h-16 rounded-xl rounded-b rounded-t-none">
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-31.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-21.jpg" alt="Drink" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-51.jpg" alt="Drink" />
                                    </div> 
                                    <div class="carousel-item">
                                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-11.jpg" alt="Drink" />
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item4" class="carousel-item w-full">
                        <img src="https://wp.nkdev.info/squadforce/wp-content/uploads/2019/07/slide-31.jpg" class="w-full" />
                    </div>
                </div> 
                <div class="flex justify-center w-full py-2 gap-2">
                    <a href="#item1" class="btn btn-xs bg-white text-gray-900 hover:bg-white border-2 hover:border-pink-600">1</a> 
                    <a href="#item2" class="btn btn-xs bg-white text-gray-900 hover:bg-white border-2 hover:border-pink-600">2</a> 
                    <a href="#item3" class="btn btn-xs bg-white text-gray-900 hover:bg-white border-2 hover:border-pink-600">3</a> 
                    <a href="#item4" class="btn btn-xs bg-white text-gray-900 hover:bg-white border-2 hover:border-pink-600">4</a>
                </div>
            </div>

            <!-- PC PS4 & XBOX -->
            <div class="container mx-auto px-3 md:px-10 my-2">
                <div class="flex flex-col space-y-12 lg:space-y-0 lg:flex-row justify-between xl:space-y-0 lg:space-x-6">
                    <div class="flex items-center space-x-12 pl-16 lg:space-x-6 w-full lg:w-1/3 px-2 py-6 bg-gray-600 rounded-lg">
                        <img class="w-20 h-20" src="svg/game.svg" alt="game">
                        <div class="space-y-3 uppercase font-bold">
                            <p class="text-2xl text-white">PC</p>
                            <p class="text-sf-pink text-2xl">View games</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-12 pl-16 lg:space-x-6 w-full lg:w-1/3 px-2 py-6 bg-gray-600 rounded-lg">
                        <img class="w-20 h-20" src="svg/game2.svg" alt="game">
                        <div class="space-y-3 uppercase font-bold">
                            <p class="text-2xl text-white">PS4</p>
                            <p class="text-sf-pink text-2xl">View games</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-12 pl-16 lg:space-x-6 w-full lg:w-1/3 px-2 py-6 bg-gray-600 rounded-lg">
                        <img class="w-20 h-20" src="svg/game4.svg" alt="game">
                        <div class="space-y-3 uppercase font-bold">
                            <p class="text-2xl text-white">XBOX</p>
                            <p class="text-sf-pink text-2xl">View games</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Divider -->
            <div class="container mx-auto px-3 md:px-10 my-4">
                <div class="flex">
                    <div class="border-b-4 border-sf-pink w-12"></div>
                    <span class="flex space-x-4 translate-y-3 font-bold uppercase text-3xl px-6">
                        <p class="text-sf-pink">Latest</p>
                        <p class="text-white">New</p>
                    </span>
                    <div class="border-b-4 w-full border-sf-pink"></div>
                </div>
            </div>

            <!-- Creepth section -->
            <div class="container mx-auto px-3 md:px-10 my-12">
                <div class="lg:flex bg-sf-slime-gray rounded-md h-[600px]">
                    <div class="md:w-1/2 overflow-x-hidden  border-r-2 border-gray-500 scrollbar-none">
                        <div class="p-3 flex space-x-6 border-b-2 border-gray-500">
                            <img class="w-28 h-28 rounded-md" src="img/creepth1.jpg" alt="game">
                            <div class="space-y-1 text-white">
                                <p class="text-lg font-bold uppercase">Lesser years third in you’re rule</p>
                                <p class="truncate text-base text-gray-400">Our them creepeth living saw they’re. Unto itself over made every fish make were blessed</p>
                                <span class="flex space-x-2">
                                    <img class="" src="svg/calendar.svg" alt="game">
                                    <p class="text-gray-400">September 12, 2019</p>
                                </span>
                            </div>
                        </div>
                        <div class="p-3 flex space-x-6 border-b-2 border-gray-500">
                            <img class="w-28 h-28 rounded-md" src="img/creepth2.jpg" alt="game">
                            <span class="space-y-1 py-2 text-white">
                                <p class="text-lg font-bold uppercase">We found a witch! May we burn her?</p>
                                <p class="text-base text-gray-400 truncate">Days. Heaven. Fruit fly and to, set heaven. Bearing which whose isn’t cattle kind moveth</p>
                                <span class="flex space-x-2">
                                    <img class="" src="svg/calendar.svg" alt="game">
                                    <p class="text-gray-400">September 18, 2019</p>
                                </span>
                            </span>
                        </div>
                        <div class="p-3 flex space-x-6 border-b-2 border-gray-500">
                            <img class="w-28 flex-none rounded-md" src="img/creepth3.jpg" alt="game">
                            <span class="space-y-1 py-2 text-white">
                                <p class="text-lg font-bold uppercase">Creepeth you’re a behold heaven</p>
                                <p class="text-base text-gray-400 truncate">Abundantly brought blessed subdue in beginning blessed man image, sea likeness creeping. Air said Bring</p>
                                <span class="flex space-x-2">
                                    <img class="" src="svg/calendar.svg" alt="game">
                                    <p class="text-gray-400">September 18, 2019</p>
                                </span>
                            </span>
                        </div>
                        <div class="p-3 flex space-x-6 border-b-2 border-gray-500">
                            <img class="w-28 h-28 rounded-md" src="img/creepth4.jpg" alt="game">
                            <span class="space-y-1 py-2 text-white">
                                <p class="text-lg font-bold uppercase">Doesn’t bring moveth you’re was</p>
                                <p class="text-base text-gray-400 truncate">All. Us kind don’t. Won’t them firmament night fly also give creature female them creature</p>
                                <span class="flex space-x-2">
                                    <img class="" src="svg/calendar.svg" alt="game">
                                    <p class="text-gray-400">September 23, 2020</p>
                                </span>
                            </span>
                        </div>
                        <div class="p-3 flex space-x-6 border-b-2 border-gray-500">
                            <img class="w-28 h-28 rounded-md" src="img/creepth5.jpg" alt="game">
                            <span class="space-y-1 py-2 text-white">
                                <p class="text-lg font-bold uppercase">Tree set gathering moved place</p>
                                <p class="text-base text-gray-400 truncate">His Brought green without stars seasons great itself all fly. Brought midst isn’t tree itself</p>
                                <span class="flex space-x-2">
                                    <img class="" src="svg/calendar.svg" alt="game">
                                    <p class="text-gray-400">September 12, 2019</p>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <span class="relative">
                            <img class="w-full" src="img/creepth2.jpg" alt="game">
                            <p class="absolute right-0 top-8 px-8 py-1.5 text-white text-lg bg-sf-blue rounded-l-lg">Racing</p>
                        </span>
                        <div class="p-4 text-white space-y-6">
                            <p class="text-2xl uppercase font-bold">We found a witch! May we burn her?</p>
                            <p class="text-gray-400 text-lg">All. Us kind don’t. Won’t them firmament night fly also give creature female them creature…</p>
                            <div class="flex justify-between">
                                <p class="text-xl uppercase font-bold text-sf-pink mt-2">Read More</p>
                                <span class="flex space-x-2 w-full">
                                    <img class="" src="svg/calendar.svg" alt="game">
                                    <p class="text-gray-400">September 12, 2019</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>