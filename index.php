<?php
    // Include the counter logic and get the latest count.
    require_once('counter.php');
    $visitor_count = update_and_get_visitor_count();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <title>Natsumatsuri なつまつり - Summer Festival</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Inter, Helvetica, Arial, sans-serif;
            background-color: #fdf6e3;
            color: #586e75;
        }
        #tsparticles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .font-noto {
            font-family: 'Noto Sans JP', sans-serif;
        }
        .section-title {
            font-family: 'Noto Sans JP', sans-serif;
            border-bottom: 3px solid #d32623;
            padding-bottom: 0.5rem;
            display: inline-block;
            color: #d32623;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #eee8d5;
            background-color: #fffcf7;
            border-radius: 0.75rem;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.07), 0 10px 10px -5px rgba(0, 0, 0, 0.03);
        }
        .theme-accent-text { color: #d32623; }
        .theme-accent-bg {
            background-color: #b58900;
            color: #ffffff;
        }
        .theme-accent-bg:hover { background-color: #936c00; }
        header {
            background-color: rgba(253, 246, 227, 0.85) !important;
            backdrop-filter: blur(8px);
            position: relative;
            z-index: 2;
        }
        main, footer {
            position: relative;
            z-index: 1;
        }
        footer { background-color: #586e75; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body>

    <div id="tsparticles"></div>

    <header class="shadow-md sticky top-0">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold section-title" style="border-bottom: none; padding-bottom: 0;">
                <span class="font-noto font-black">なつまつり</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-gray-600 hover:text-black transition flex items-center font-bold"><img src="icons/icons8-about-100.png" alt="About Icon" class="page-icon w-5 h-5 mr-1"> About</a>
                <a href="#activities" class="text-gray-600 hover:text-black transition flex items-center font-bold"><img src="icons/icons8-carnival-100.png" alt="Activities Icon" class="page-icon w-5 h-5 mr-1"> Activities</a>
                <a href="#schedule" class="text-gray-600 hover:text-black transition flex items-center font-bold"><img src="icons/icons8-calendar-100.png" alt="Schedule Icon" class="page-icon w-5 h-5 mr-1"> Schedule</a>
                <a href="#location" class="text-gray-600 hover:text-black transition flex items-center font-bold"><img src="icons/icons8-location-100.png" alt="Location Icon" class="page-icon w-5 h-5 mr-1"> Location</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden flex items-center">
                <img src="icons/icons8-menu-100.png" alt="Menu Icon" class="page-icon w-6 h-6">
            </button>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#about" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center font-bold"><img src="icons/icons8-about-100.png" alt="About Icon" class="page-icon w-5 h-5 mr-1"> About</a>
            <a href="#activities" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center font-bold"><img src="icons/icons8-carnival-100.png" alt="Activities Icon" class="page-icon w-5 h-5 mr-1"> Activities</a>
            <a href="#schedule" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center font-bold"><img src="icons/icons8-calendar-100.png" alt="Schedule Icon" class="page-icon w-5 h-5 mr-1"> Schedule</a>
            <a href="#location" class="block py-2 px-4 text-sm hover:bg-gray-200 flex items-center font-bold"><img src="icons/icons8-location-100.png" alt="Location Icon" class="page-icon w-5 h-5 mr-1"> Location</a>
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

        <section id="schedule" class="my-20 scroll-mt-20">
            <h2 class="text-4xl font-bold mb-4 text-center section-title font-noto">Event Schedule</h2>
            <p class="text-center text-xl font-semibold text-gray-600 mb-12">Friday, July 25, 2025</p> <div class="max-w-2xl mx-auto card p-8">
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
                                            <p class="font-medium">Destinyhopetiara (Parliament)</p>
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

    </main>

    <footer>
        <div class="container mx-auto px-6 py-8 text-center text-white">
            <p class="font-bold text-lg mb-2 font-noto">Natsumatsuri なつまつり 2025</p>
            <p>Japanese Culture Club & Student Government</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="https://www.instagram.com/jcc_tuj/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white flex flex-col items-center"><img src="icons/icons8-instagram-100.png" alt="Instagram of TUJ JCC" class="page-icon w-6 h-6"><span class="text-xs mt-1">JCC</span></a>
                <a href="https://www.instagram.com/templeunivjapan" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white flex flex-col items-center"><img src="icons/icons8-instagram-100.png" alt="Instagram of TUJ SAO" class="page-icon w-6 h-6"><span class="text-xs mt-1">TUJ</span></a>
            </div>
            <div class="mt-8 border-t border-gray-600 pt-6">
                <p class="text-sm text-gray-300">Total Site Visits: <span class="font-bold text-lg text-white"><?php echo number_format($visitor_count); ?></span></p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    if (!document.getElementById('mobile-menu').classList.contains('hidden')) {
                        document.getElementById('mobile-menu').classList.add('hidden');
                    }
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/tsparticles-fireworks@2.12.0/tsparticles.fireworks.bundle.min.js"></script>

    <script>
        tsParticles.load("tsparticles", {
            preset: "fireworks",
        });
    </script>

</body>
</html>
