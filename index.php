<?php
    // Include the counter logic and get the latest count.
    // This will increment the counter on every page load.
    require_once('counter.php');
    $visitor_count = update_and_get_visitor_count();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natsumatsuri なつまつり - Summer Festival</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        /* Elegant Golden Vibe Theme */
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #fdf6e3; /* Soft, warm beige background */
            color: #586e75; /* Muted, readable text color */
        }
        .font-noto {
            font-family: Helvetica, Arial, sans-serif;
        }
        .section-title {
            font-family: Helvetica, Arial, sans-serif;
            border-bottom: 3px solid #d32623; /* Classic gold accent */
            padding-bottom: 0.5rem;
            display: inline-block;
            color: #d32623; /* Matching gold text */
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #eee8d5; /* Subtle light border */
            background-color: #fffcf7; /* Creamy white card background */
            border-radius: 0.75rem; /* Slightly more rounded cards */
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.07), 0 10px 10px -5px rgba(0, 0, 0, 0.03);
        }
        .theme-accent-text {
            color: #d32623; /* A contrasting warm orange for accents */
        }
        .theme-accent-bg {
            background-color: #b58900; /* Button background */
            color: #ffffff;
        }
        .theme-accent-bg:hover {
            background-color: #936c00; /* Darker gold for hover */
        }
        header {
            background-color: rgba(253, 246, 227, 0.85) !important; /* Semi-transparent version of the body color */
            backdrop-filter: blur(8px);
        }
        footer {
            background-color: #586e75; /* Muted, dark color for footer */
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <header class="shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold section-title" style="border-bottom: none; padding-bottom: 0;">
                <span class="font-noto font-black">なつまつり</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-gray-600 hover:text-black transition">About</a>
                <a href="#activities" class="text-gray-600 hover:text-black transition">Activities</a>
                <a href="#schedule" class="text-gray-600 hover:text-black transition">Schedule</a>
                <a href="#location" class="text-gray-600 hover:text-black transition">Location</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden flex items-center">
                <img src="icons/icons8-menu-100.png" alt="Menu Icon" class="page-icon w-6 h-6">
            </button>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#about" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
            <a href="#activities" class="block py-2 px-4 text-sm hover:bg-gray-200">Activities</a>
            <a href="#schedule" class="block py-2 px-4 text-sm hover:bg-gray-200">Schedule</a>
            <a href="#location" class="block py-2 px-4 text-sm hover:bg-gray-200">Location</a>
        </div>
    </header>

    <section>
        <img src="banner.gif" alt="Natsumatsuri Festival Banner" class="w-full object-cover">
    </section>

    <main class="container mx-auto px-6 py-12">

        <section id="about" class="my-16 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-6 section-title font-noto">Welcome to the Festival!</h2>
            <div class="max-w-3xl mx-auto text-lg leading-relaxed">
                <p class="mb-4">
                    Join us for our annual Natsumatsuri (Summer Festival) at Temple University, Japan Campus! This is a special day for us to celebrate the vibrant spirit of summer with traditional Japanese festivities.
                </p>
                <p>
                    We warmly welcome everyone—<span class="font-bold theme-accent-text">Students, Setagaya volunteers, and our friends from Showa Women's University</span>—to come together for an unforgettable evening of fun, food, and culture. Let's create wonderful summer memories together!
                </p>
            </div>
        </section>

        <section id="activities" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Festival Activities</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                <a href="#game-yatai-details" class="card block p-6 text-center">
                    <div class="mb-4 theme-accent-text">
                        <img src="icons/icons8-rubik's-cube-100.png" alt="Game Yatai Icon" class="page-icon w-16 h-16 mx-auto">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Game Yatai</h3>
                    <p class="text-gray-500 font-semibold">Location: Parliament</p>
                    <span class="mt-2 inline-block text-blue-500 text-sm font-semibold">Click for details!</span>
                </a>
                <a href="#food-yatai-details" class="card block p-6 text-center">
                    <div class="mb-4 theme-accent-text">
                        <img src="icons/icons8-kawaii-sushi-100.png" alt="Food Yatai Icon" class="page-icon w-16 h-16 mx-auto">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Food Yatai</h3>
                    <p class="text-gray-500 font-semibold">Location: Cafeteria</p>
                    <span class="mt-2 inline-block text-blue-500 text-sm font-semibold">Click for details!</span>
                </a>
                <a href="#crafting-space-details" class="card block p-6 text-center">
                    <div class="mb-4 theme-accent-text">
                        <img src="icons/icons8-drawing-100.png" alt="Crafting Space Icon" class="page-icon w-16 h-16 mx-auto">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Crafting Space</h3>
                    <p class="text-gray-500 font-semibold">Location: Cafeteria</p>
                    <span class="mt-2 inline-block text-blue-500 text-sm font-semibold">Click for details!</span>
                </a>
                <a href="#crafting-market-details" class="card block p-6 text-center">
                    <div class="mb-4 theme-accent-text">
                         <img src="icons/icons8-picasso-100.png" alt="Crafting Market Icon" class="page-icon w-16 h-16 mx-auto">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Crafting Market</h3>
                    <p class="text-gray-500 font-semibold">Location: Parliament</p>
                    <span class="mt-2 inline-block text-blue-500 text-sm font-semibold">Click for details!</span>
                </a>
                <a href="#performance-details" class="card block p-6 text-center">
                    <div class="mb-4 theme-accent-text">
                        <img src="icons/icons8-theatre-curtain-100.png" alt="Performance Icon" class="page-icon w-16 h-16 mx-auto">
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Performance</h3>
                    <p class="text-gray-500 font-semibold">Location: Parliament</p>
                    <span class="mt-2 inline-block text-blue-500 text-sm font-semibold">Click for details!</span>
                </a>
            </div>
        </section>

        <section id="game-yatai-details" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Game Yatai Stalls</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-maneki-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Omikuji (おみくじ)</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-fishing-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Scooping</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-fishing-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Fishing</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-paintball-gun-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Shooting</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-float-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Ring Toss</h3>
                </div>
            </div>
        </section>

        <section id="food-yatai-details" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Food Yatai Stalls</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/taiyaki.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Taiyaki (たい焼き)</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-soda-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Ramune (ラムネ)</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-kawaii-pizza-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Pizza</h3>
                </div>
            </div>
        </section>

        <section id="crafting-space-details" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Crafting Space</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-circle-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Rubber Band Gun Crafting</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-lantern-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Lantern Painting</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-hand-fan-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Fan Painting</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/icons8-kimono-100.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Yukata Wearing</h3>
                </div>
            </div>
        </section>

        <section id="crafting-market-details" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Crafting Market Artists</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Vishnuu Akshaya Parameswaran</h3>
                </div>
                <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Nanami Takeuchi</h3>
                </div>
            </div>
        </section>

        <section id="performance-details" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Performers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                 <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Music Club</h3><p class="text-gray-500 font-semibold">Live Band</p>
                    <p><i>"This is a test"</i></p>
                 </div>
                 <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Kimiko Wakayagi</h3><p class="text-gray-500 font-semibold">Traditional Dance</p>
                    <p><i>"This is a test"</i></p>
                 </div>
                 <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">kendama performer</h3><p class="text-gray-500 font-semibold">Kendama</p>
                    <p><i>"This is a test"</i></p>
                 </div>
                 <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Renji</h3><p class="text-gray-500 font-semibold">Singer</p>
                    <p><i>"This is a test"</i></p>
                 </div>
                 <div class="card p-6 text-center">
                    <div class="mb-4 theme-accent-text"><img src="icons/firework.png" alt="Icon" class="page-icon w-16 h-16 mx-auto"></div>
                    <h3 class="text-xl font-bold">Yume</h3><p class="text-gray-500 font-semibold">Singer & Guitarist</p>
                    <p><i>"This is a test"</i></p>
                 </div>
            </div>
        </section>


        <section id="schedule" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Event Schedule</h2>
            <div class="max-w-2xl mx-auto card p-8">
                <div class="flow-root">
                    <ul class="-mb-8">
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                            <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">5:00 PM</p>
                                            <p class="font-medium">Doors Open (General)</p>
                                            <p class="font-medium mt-1">Yume (Parliament)</p>
                                            <p class="font-medium mt-1"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                            <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">5:15 PM</p>
                                            <p class="font-medium">Renji (Parliament)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                             <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">5:30 PM</p>
                                            <p class="font-medium">Japanese Traditional Dancer (Parliament)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                             <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">6:00 PM - 6:05 PM</p>
                                            <p class="font-medium">Kendama Performance (Cafeteria)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                             <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">6:05 PM</p>
                                            <p class="font-medium">Kendama Workshop (Cafeteria)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                             <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">6:40 PM</p>
                                            <p class="font-medium">TUJ Music Club (Parliament)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative pb-8">
                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                             <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">7:45 PM</p>
                                            <p class="font-medium">destinyhopetiara (Parliament)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative">
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span class="h-8 w-8 rounded-full theme-accent-bg flex items-center justify-center ring-8 ring-white" style="background-color: #b58900">
                                            <img src="icons/firework.png" alt="Timeline Icon" class="page-icon h-5 w-5">
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div><p class="text-sm text-gray-500">8:00 PM</p><p class="font-medium">Event Finish</p><br></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
             <p class="text-center mt-4 text-gray-500">(Schedule is tentative and subject to change)</p>
        </section>

        <section id="location" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-12 text-center section-title font-noto">Find Us</h2>
            <div class="card overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Event Venues</h3>
                        <p class="text-lg mb-2 font-bold">Parliament & Cafeteria</p>
                        <p class="text-gray-500 mb-4">Temple University, Japan Campus<br>1-14-29 Taishido, Setagaya-ku, Tokyo, 154-0004</p>
                        <a href="https://www.tuj.ac.jp/maps/tokyo" target="_blank" rel="noopener noreferrer" class="inline-block theme-accent-bg font-bold py-2 px-4 rounded-full transition duration-300">
                            Get Directions
                        </a>
                    </div>
                     <div class="h-64 md:h-full">
                         <a href="https://www.tuj.ac.jp/maps/tokyo" target="_blank" rel="noopener noreferrer">
                            <img src="icons/Map.png" alt="Map showing Campus location" class="w-full h-full object-cover">
                         </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="disclaimer" class="my-16 scroll-mt-20">
            <div class="max-w-3xl mx-auto text-sm text-gray-500 leading-relaxed">
                 <p>
                    Disclaimer: the Natsu Matsuri is organized and run by students of the Japanese Culture Club (JCC) at Temple University, Japan Campus ("TUJ"), and is editorially independent of TUJ and Temple University ("Temple"). Any opinions expressed by the organizers or others on this website are those of the respective writers or speakers, not of TUJ or Temple.
                </p>
            </div>
        </section>

    </main>

    <footer>
        <div class="container mx-auto px-6 py-8 text-center text-white">
            <p class="font-bold text-lg mb-2 font-noto">Natsumatsuri なつまつり 2025</p>
            <p>Japanese Culture Club & Student Government</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-white"><img src="icons/firework.png" alt="Facebook Icon" class="page-icon w-6 h-6"></a>
                <a href="#" class="text-gray-400 hover:text-white"><img src="icons/firework.png" alt="Twitter Icon" class="page-icon w-6 h-6"></a>
                <a href="#" class="text-gray-400 hover:text-white"><img src="icons/firework.png" alt="Instagram Icon" class="page-icon w-6 h-6"></a>
            </div>

            <div class="mt-8 border-t border-gray-600 pt-6">
                <p class="text-sm text-gray-300">
                    Total Site Visits: 
                    <span class="font-bold text-lg text-white">
                        <?php echo number_format($visitor_count); ?>
                    </span>
                </p>
            </div>
            </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    // Close mobile menu on click
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
