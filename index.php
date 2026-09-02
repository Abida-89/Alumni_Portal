    <?php
        session_start();
        $isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
    ?>
<html lang="en">
    <head>
            <meta charset="utf-8"/>
            <meta content="width=device-width, initial-scale=1" name="viewport"/>
            <title>PUC Alumni </title>
            <link rel="icon" href="img/pucLogo.jpg">

            <script src="https://cdn.tailwindcss.com"></script>            
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
            <!-- AOS Animation Library -->
            <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
            <link href="style.css" rel="stylesheet"/>
    </head>
            
    <body class="bg-gray-50 min-h-screen flex flex-col">
            
        <!-- Top Bar: Search + Login/Register -->
        <div class="bg-white shadow-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-12">
                
                <!-- Search Bar -->
                <form action="search.php" method="GET" class="relative w-full max-w-md">
                    <input name="search" aria-label="Search" class="w-full rounded-full border border-gray-300 pl-10 pr-4 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Search..." type="text"/>
                        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <i class="fas fa-search"></i>
                        </span>
                </form>
                
                <!-- Login/Register Buttons -->                
                <div class="flex space-x-6">
                    <!-- Show Dashboard if user is logged in -->
                    <?php if ($isLoggedIn): ?>
                        <a href="profile/dashboard.php"><button class="bg-blue-600 text-white font-semibold rounded px-3 py-1 hover:bg-blue-700 focus:ring-2 focus:ring-blue-600 rounded px-3 py-1" id="dashBtn">My Profile</a>
                    <?php else: ?>
                        <!-- Show Login/Register if user is not logged in -->
                            <a href="login-page/login.php"><button class="bg-blue-600 text-white font-semibold rounded px-3 py-1 hover:bg-blue-700 focus:ring-2 focus:ring-blue-600 rounded px-3 py-1" id="loginBtn">Login</a>
                            <a href="login-page/register.php"><button class="bg-blue-600 text-white font-semibold rounded px-3 py-1 hover:bg-blue-700 focus:ring-2 focus:ring-blue-600 rounded px-3 py-1" id="registerBtn">Register</a>                        
                    <?php endif; ?>
                </div>            
            </div>
        </div>
            
            <!-- Navigation Bar -->
            <nav class="bg-white shadow sticky top-[48px] z-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-14">
                        <div class="flex items-center space-x-8">
                            <a class="flex items-center space-x-3" href="index.php"><img alt="Premier University Chittagong logo" class="w-10 h-10" height="40" src="img/pucLogo.jpg" width="40"/>
                                <span class="font-bold text-xl text-blue-800 select-none">PUC Alumni</span>
                            </a>
                <ul class="hidden md:flex space-x-6 items-center text-gray-700 font-medium">
                    <li><a class="hover:text-blue-600 transition" href="index.php">Home</a></li>
                    <li><a class="hover:text-blue-600 transition" href="#about">About</a></li>
                    <li><a class="hover:text-blue-600 transition" href="#alumni">Alumni</a></li>
                    <li><a class="hover:text-blue-600 transition" href="#event">Event</a></li>
                        <li class="relative group">
                            <button aria-expanded="false" aria-haspopup="true" class="flex items-center space-x-1 hover:text-blue-600 transition focus:outline-none" id="pagesMenuBtn">
                                <span>Pages</span>
                                <i class="fas fa-chevron-down text-sm"></i>
                            </button>
                            
                            <ul aria-label="submenu" class="absolute left-0 mt-1 w-48 bg-white border border-gray-200 rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity">
                                <li><a class="block px-4 py-2 hover:bg-blue-50 text-gray-700" href="#event">Gallery</a></li>
                                <li><a class="block px-4 py-2 hover:bg-blue-50 text-gray-700" href="login-page/register.php"> Register</a></li>
                                <li><a class="block px-4 py-2 hover:bg-blue-50 text-gray-700" href="jobs.html">Jobs & Opportunities</a></li>
                            </ul>
                        </li>
                    <li><a class="hover:text-blue-600 transition" href="#contact">Contact Us</a></li>
                </ul>
            </div>

                    <!-- Mobile menu button -->
                        <div class="flex items-center md:hidden">
                            <button aria-label="Toggle menu" class="text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600" id="mobileMenuBtn">
                                <i class="fas fa-bars fa-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Menu -->
                <div class="hidden md:hidden bg-white border-t border-gray-200" id="mobileMenu">
                    <ul class="flex flex-col space-y-1 p-4 text-gray-700 font-medium">
                        <li><a class="block py-2 hover:text-blue-600" href="index.php">Home</a></li>
                        <li><a class="block py-2 hover:text-blue-600" href="about.php">About</a></li>
                        <li><a class="block py-2 hover:text-blue-600" href="alumni.html">Alumni</a></li>
                        <li><a class="block py-2 hover:text-blue-600" href="event.html">Event</a></li>
                        <li><button class="w-full text-left flex justify-between items-center py-2 hover:text-blue-600 focus:outline-none" id="mobilePagesBtn">Pages<i class="fas fa-chevron-down"></i></button>
                            <ul class="hidden pl-4 mt-1 space-y-1" id="mobilePagesMenu">
                                <li><a class="block py-1 hover:text-blue-600" href="gallery">Gallery</a></li>
                                <li><a class="block py-1 hover:text-blue-600" href="login-page/register.php">Register</a></li>
                                <li><a class="block py-1 hover:text-blue-600" href="jobs.html">Jobs & Opportunities</a></li>
                            </ul>
                        </li>
                        <li><a class="block py-2 hover:text-blue-600" href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
            
            <!-- Main Content -->
            <main class="flex-grow">
            <!-- Home Page Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" id="homePage">
                <!-- Slider Section -->
                    <section class="relative w-full max-w-5xl mx-auto rounded-lg overflow-hidden shadow-lg" id="sliderSection">
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="flex transition-transform duration-700 ease-in-out" id="slider">
                                <div class="min-w-full relative">
                                    <img alt="Premier University Chittagong main campus " class="w-full h-64 sm:h-80 object-cover" height="500" src="img/maincmps.jpg" width="1200"/>
                                    <div class="absolute bottom-6 left-6 bg-black bg-opacity-50 p-4 rounded-md max-w-xs">
                                        <h2 class="text-white font-bold text-2xl sm:text-3xl leading-tight">Welcome to PUC Alumni Website.</h2>
                                        <p class="text-gray-200 mt-1 text-sm sm:text-base">Building a strong community of expert professionals.</p>
                                    </div>
                                </div>
                                
                                <div class="min-w-full relative">
                                    <img alt="Premier University Chittagong graduation ceremony with students in caps and gowns throwing hats in the air in celebration" class="w-full h-64 sm:h-80 object-cover" height="500" src="img/convo1.jpg" width="1200"/>
                                        <div class="absolute bottom-6 left-6 bg-black bg-opacity-50 p-4 rounded-md max-w-xs">
                                            <h2 class="text-white font-bold text-2xl sm:text-3xl leading-tight">Welcome to PUC Alumni Website.</h2>
                                            <p class="text-gray-200 mt-1 text-sm sm:text-base">Building a strong community of expert professionals.</p>
                                        </div>
                                </div>

                                <div class="min-w-full relative">
                                    <img alt="Covocation ceremony" class="w-full h-64 sm:h-80 object-cover" height="500" src="img/convo2.jpg" width="1200"/>
                                        <div class="absolute bottom-6 left-6 bg-black bg-opacity-50 p-4 rounded-md max-w-xs">
                                            <h2 class="text-white font-bold text-2xl sm:text-3xl leading-tight">Welcome to PUC Alumni Website.</h2>
                                            <p class="text-gray-200 mt-1 text-sm sm:text-base"> Building a strong community of expert professionals.</p>
                                        </div>
                                </div>
                            </div>

                    <!-- Slider Controls -->
                    <button aria-label="Previous Slide" class="absolute top-1/2 left-3 transform -translate-y-1/2 bg-black bg-opacity-40 hover:bg-opacity-70 text-white rounded-full p-2 focus:outline-none focus:ring-2 focus:ring-white" id="prevSlide">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button aria-label="Next Slide" class="absolute top-1/2 right-3 transform -translate-y-1/2 bg-black bg-opacity-40 hover:bg-opacity-70 text-white rounded-full p-2 focus:outline-none focus:ring-2 focus:ring-white" id="nextSlide">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </section>
                
                <!-- About Us Section -->
                <section class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-center" id="about">
                    <div>
                        <img alt="Graduates" class="rounded-lg shadow-md object-cover w-full h-80" height="400" src="img/image.png" width="600" data-aos="fade-right"/>
                    </div>
            
                    <div class="text-gray-800">
                        <h2 class="text-3xl font-bold mb-4">About Us</h2>
                        <p class="text-lg leading-relaxed" id="aboutPreview">Premier University Chittagong Alumni website is dedicated to building a strong and connected community of expert professionals who have graduated from our esteemed university. This platform serves as a bridge to foster networking, career opportunities, and lifelong relationships among alumni. Our goal is to keep you informed about university events, job opportunities, and provide a space to share your achievements and experiences. The necessity of this website stems from the need to maintain a vibrant alumni network that supports both personal and professional growth.</p>
                        <a href="about.php">
                            <button class="mt-6 bg-blue-600 text-white px-5 py-2 rounded shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600" >See More</button></a>
                    </div>
                </section>
                
            <!-- Alumni Section -->
            <section class="max-w-7xl mx-auto space-y-6" id="alumni">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Alumni</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                
                <!-- Alumni Card 1 -->
                    <div aria-pressed="false" class="alumni-card bg-white rounded-xl shadow-md p-4 flex flex-col items-center text-center cursor-pointer" data-alumni-id="1" role="button" tabindex="0" data-aos="fade-up">
                        <a class="alumni-profile" href="alumni1.php"><img alt="Portrait of Alumni member 1" class="rounded-full w-36 h-36 object-cover mb-4" height="150" src="img/alumni1.png" width="150"/>
                            <h3 class="font-semibold text-lg text-gray-900">Mohammed Mohiuddin</h3>
                        <p class="text-gray-600 text-sm mt-1">Coding Instructor at Dreamers Academy</p></a>
                    </div>
                
                <!-- Alumni Card 2 -->
                    <div aria-pressed="false" class="alumni-card bg-white rounded-xl shadow-md p-4 flex flex-col items-center text-center cursor-pointer" data-alumni-id="2" role="button" tabindex="0" data-aos="fade-up">
                        <a class="alumni-profile" href="alumni2.php"><img alt="Portrait of Alumni member 2" class="rounded-full w-36 h-36 object-cover mb-4" height="150" src="img/alumni2.jpg" width="150"/>
                            <h3 class="font-semibold text-lg text-gray-900">Nasrin Jahan Ripa</h3>
                        <p class="text-gray-600 text-sm mt-1">Front-End developer at Nexlent</p></a>
                    </div>
                    
                <!-- Alumni Card 3 -->
                    <div aria-pressed="false" class="alumni-card bg-white rounded-xl shadow-md p-4 flex flex-col items-center text-center cursor-pointer" data-alumni-id="3" role="button" tabindex="0" data-aos="fade-up">
                        <a class="alumni-profile" href="alumni3.php"><img alt="Portrait of Alumni member 3" class="rounded-full w-36 h-36 object-cover mb-4" height="150" src="img/alumni3.jpg" width="150"/>
                            <h3 class="font-semibold text-lg text-gray-900">Kazi Md Amirul Islam</h3>
                        <p class="text-gray-600 text-sm mt-1">Software Engineer-L2 at Brain Station 23</p></a>
                    </div>
                    
                </div>

                <div class="flex justify-end mt-4">
                    <a href="mem-reg/view_members.php">
                        <button aria-label="See more alumni" class=" round-arrow-btn" id="alumniSeeMore" title="See more alumni">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
                
            </section>
            
            <!-- Event Section -->
                <section class="mt-20" id="event">
                        <h2 class="text-3xl font-bold mb-8 text-blue-800">Events</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-h-[600px] overflow-y-auto scrollbar-hide" id="eventGallery">
            
            <!-- Event Image 1 -->
                        <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group" tabindex="0" data-aos="zoom-in">
                            <img alt="win at cse fest" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" height="300" src="img/champion.jpg" width="400"/>
                                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-white text-center">
                                    <p>CSE Fest, 2025 - A team of PUC Computer Club wins at the fest.</p>
                                </div>
                        </div>
                
            <!-- Event Image 2 -->
                        <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group" tabindex="0" data-aos="fade-up">
                            <img alt="Photo of Premier University Chittagong workshop event with speaker presenting to an audience in a modern conference room" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" height="300" src="https://storage.googleapis.com/a1aa/image/cfd9ba07-56d8-41cf-76d9-5c2c3b1ae631.jpg" width="400"/>
                                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-white text-center">
                                    <p>Career Development Workshop - Expert sessions on career growth and skills.</p>
                                </div>
                        </div>
                
            <!-- Event Image 3 -->
                        <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group" tabindex="0" data-aos="zoom-in">
                            <img alt="Photo of Premier University Chittagong charity run event with participants running outdoors wearing university t-shirts" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" height="300" src="img/seminar.png" width="400"/>
                                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-white text-center">
                                    <p> Seminar 2025 - A huge crowd at the Seminar of Full-Stack Roadmap where Anisul Islam sir was the Chief guest.</p>
                                </div>
                        </div>
                
            <!-- Event Image 4 -->
                        <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group" tabindex="0" data-aos="fade-up">
                            <img alt="Photo of Premier University Chittagong guest lecture with professor speaking on stage and audience listening attentively" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" height="300" src="https://storage.googleapis.com/a1aa/image/89639a6f-9294-4b72-fae3-8bf62a3dcf48.jpg" width="400"/>
                                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-white text-center">
                                    <p>Guest Lecture Series - Insights from industry leaders and academics.</p>
                                </div>
                        </div>
                
            <!-- Event Image 5 -->
                        <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group" tabindex="0" data-aos="zoom-in">
                            <img alt="Photo of Premier University Chittagong networking night event with alumni chatting and exchanging business cards in a lounge" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" height="300" src="https://storage.googleapis.com/a1aa/image/b5c056bf-f6e8-49c2-d271-08f5256ad7cc.jpg" width="400"/>
                                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-white text-center">
                                    <p>Networking Night - Building connections for future opportunities.</p>
                                </div>
                        </div>
                
            <!-- Event Image 6 -->
                        <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer group" tabindex="0" data-aos="fade-up">
                            <img alt="Photo of Premier University Chittagong alumni awards ceremony with awardees receiving trophies on stage" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" height="300" src="https://storage.googleapis.com/a1aa/image/cf161955-a002-4c38-7dc1-b1bb51f1a8e9.jpg" width="400"/>
                                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-white text-center">
                                    <p>Alumni Awards 2023 - Celebrating outstanding achievements of our graduates.</p>
                                </div>
                        </div>
                    </div>
            </section>

            <!-- Contact Section -->
            <section class="max-w-7xl mx-auto flex flex-col md:flex-row gap-8 items-start" id="contact">
                <div class="md:w-1/2 h-96 rounded-lg overflow-hidden shadow-lg"><br> <br>
                    <iframe allowfullscreen="" height="100%" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9279279279277!2d91.813927315431!3d22.35685188526333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8a0a7a3a3a3%3A0x7a7a7a7a7a7a7a7a!2sPremier%20University%20Chittagong!5e0!3m2!1sen!2sbd!4v1698199999999!5m2!1sen!2sbd" style="border:0;" title="PUC Alumni Location Map" width="100%"></iframe>
                </div>

                <div class="md:w-1/2 bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-3xl font-bold text-blue-600 mb-4">Contact Us</h2>
                        <form class="space-y-4" id="contactForm" novalidate="" action="submit_contact.php" method="POST">
                            <div>
                                <label class="block font-semibold mb-1" for="name">Name</label>
                                <input class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" name="name" placeholder="Your full name" required="" type="text"/>
                            </div>

                            <div>
                                <label class="block font-semibold mb-1" for="email">Email</label>
                                <input class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" name="email" placeholder="you@example.com" required="" type="email"/>
                            </div>

                            <div>
                                <label class="block font-semibold mb-1" for="message">Message</label>
                                <textarea class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="message" name="message" placeholder="Write your message here" required="" rows="4"></textarea>
                            </div>

                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded px-6 py-2 transition" type="submit">
                                Send Message
                            </button>
                        </form>
                    </div>
                </section>
            </div>
            </main>
                        
            <!-- Footer -->
            <footer class="bg-gray-900 text-gray-300 mt-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-white font-bold text-lg mb-4">Quick Links</h3>
                            <ul class="space-y-2">
                                <li><a class="hover:text-white" href="index.php">Home</a></li>
                                <li><a class="hover:text-white" href="about.php">About</a></li>
                                <li><a class="hover:text-white" href="#alumni">Alumni</a></li>
                                <li><a class="hover:text-white" href="#event">Event</a></li>
                                <li><a class="hover:text-white" href="jobs.html">Jobs & Opportunities</a></li>
                                <li><a class="hover:text-white" href="#contact">Contact Us</a></li>
                            </ul>
                    </div>
                        
                    <div>
                        <h3 class="text-white font-bold text-lg mb-4">Address</h3>
                            <address class="not-italic">Premier University Chittagong<br>
                                <p> 
                                    Chittagong, Bangladesh<br/>
                                    Phone: +880 31 1234567<br/>
                                    Email: info@puc.ac.bd
                                </p>
                            </address>
                    </div>

                    <div class="flex items-end justify-end text-sm text-gray-500">
                        © 2025 Premier University Chittagong Alumni.<br>
                        All rights reserved.
                    </div>
                </div>
            </footer>

            <script src="main.js"></script>
            <!--activating AOS --->
            <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
            <script>
                AOS.init({
                duration: 1000, // Animation duration (milliseconds)
                once: true,     // Animate only once when scrolling down
                });
            </script>
    </body>
</html>