<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: login-page/login.php");
        exit();
    }
?>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
            <meta content="width=device-width, initial-scale=1" name="viewport"/>
            <title>About Us</title>
                <link rel="icon" href="img/pucLogo.jpg">
                <script src="https://cdn.tailwindcss.com"></script>
                
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
                <link href="style.css" rel="stylesheet"/>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Top Bar: Search + Login/Register -->
        <div class="bg-white shadow-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-12">
            
            <!-- Search Bar -->
            <form class="relative w-full max-w-md">
                <input aria-label="Search" class="w-full rounded-full border border-gray-300 pl-10 pr-4 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Search..." type="text"/>
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <i class="fas fa-search"></i>
                    </span>
            </form>
            
            <!-- Login/Register Buttons -->
                <div class="flex space-x-3">
                    <a href="profile/dashboard.php"><button class="bg-blue-600 text-white font-semibold rounded px-3 py-1 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600" id="registerBtn">My Profile</button></a>
                </div>
            </div>
        </div>
        
        <!-- Navigation Bar -->
        <nav class="bg-white shadow sticky top-[48px] z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-14">
                    <div class="flex items-center space-x-8">
                        <a class="flex items-center space-x-3" href="index.php"><img alt="PUC alumni logo" class="w-10 h-10" height="40" src="img/pucLogo.jpg" width="40"/>
                            <span class="font-bold text-xl text-blue-800 select-none">PUC Alumni</span>
                        </a>
                        <ul class="hidden md:flex space-x-6 items-center text-gray-700 font-medium">
                            <li><a class="hover:text-blue-600 transition" href="index.php">Home</a></li>
                            <li><a class="hover:text-blue-600 transition" href="about.php">About</a></li>
                            <li><a class="hover:text-blue-600 transition" href="index.php#alumni">Alumni</a></li>
                            <li><a class="hover:text-blue-600 transition" href="index.php#event">Event</a></li>
                            <li class="relative group">
                                <button aria-expanded="false" aria-haspopup="true" class="flex items-center space-x-1 hover:text-blue-600 transition focus:outline-none" id="pagesMenuBtn">
                                    <span>Pages</span>
                                        <i class="fas fa-chevron-down text-sm"></i>
                                </button>
                                
                                <ul aria-label="submenu" class="absolute left-0 mt-1 w-48 bg-white border border-gray-200 rounded shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity">
                                    <li><a class="block px-4 py-2 hover:bg-blue-50 text-gray-700" href="index.php#event">Gallery</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-blue-50 text-gray-700" href="mem-reg/view_members.php"> Register</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-blue-50 text-gray-700" href="jobs.html">Jobs & Opportunities</a></li>
                                </ul>
                            </li>
                            
                            <li><a class="hover:text-blue-600 transition" href="index.php#contact">Contact Us</a></li>
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
                    <li><a class="block py-2 hover:text-blue-600" href="index.php#alumni">Alumni</a></li>
                    <li><a class="block py-2 hover:text-blue-600" href="index.php#event">Event</a></li>
                    <li><button class="w-full text-left flex justify-between items-center py-2 hover:text-blue-600 focus:outline-none" id="mobilePagesBtn">Pages<i class="fas fa-chevron-down"></i></button>
                        <ul class="hidden pl-4 mt-1 space-y-1" id="mobilePagesMenu">
                            <li><a class="block py-1 hover:text-blue-600" href="index.php#event">Gallery</a></li>
                            <li><a class="block py-1 hover:text-blue-600" href="login-page/register.php">Register</a></li>
                            <li><a class="block py-1 hover:text-blue-600" href="jobs.html">Jobs & Opportunities</a></li>
                        </ul>
                    </li>
                    <li><a class="block py-2 hover:text-blue-600" href="index.php#contact">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        
        <!-- Main Content -->
            <main class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 d-flex flex-column flex-md-row gap-4 align-items-start">            
                    
                    <!-- Image Section -->
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img src="img/cloudypremier.jpg" alt="Premier University" class="img-fluid rounded zoom-in shadow-sm">
                        </div>

                    <!-- About Text Section -->
                        <div class="col-md-8">
                            <div class="floating-box">
                                <h2 class="mb-4 text-primary text-center">
                                    <strong>About Premier University Alumni Website</sttrong>
                                </h2>
                                <p class="text-justify">
                                    Premier University Chittagong Alumni website is dedicated to building a strong and connected community of expert professionals who have graduated from our esteemed university. This platform serves as a bridge to foster networking, career opportunities, and lifelong relationships among alumni.
                                </p>
                                
                                <p class="text-justify">
                                    Our goal is to keep you informed about university events, job opportunities, and provide a space to share your achievements and experiences. The necessity of this website stems from the need to maintain a vibrant alumni network that supports both personal and professional growth.
                                </p>
                                
                                <p class="text-justify">
                                    Premier University, located in the heart of Chattogram, stands as one of the leading private universities in Bangladesh, offering an enriching academic atmosphere, cutting-edge research facilities, and a campus culture that encourages holistic development. The university attracts meritorious students through a rigorous admission process and supports them with a wide range of academic programs.
                                </p>
                                
                                <p class="text-justify">
                                    Premier University maintains strong collaborations with governmental agencies, non-governmental organizations, and industries to bridge the gap between academia and the real world. With a vision to shape future leaders, Premier University continues to provide a vibrant learning environment that combines academic excellence, ethical values, and a strong sense of social responsibility.
                                </p>
                            </div>
                        </div>
                    </div>
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
                            <li><a class="hover:text-white" href="mem-reg/view_members.php">Alumni</a></li>
                            <li><a class="hover:text-white" href="index.php#event">Event</a></li>
                            <li><a class="hover:text-white" href="jobs.html">Jobs & Opportunities</a></li>
                            <li><a class="hover:text-white" href="index.php#contact">Contact Us</a></li>
                        </ul>
                </div>

                <div>
                    <h3 class="text-white font-bold text-lg mb-4">Address</h3>
                        <address class="not-italic">Premier University Chittagong<br>
                            Chittagong, Bangladesh<br/>
                            Phone: +880 31 1234567<br/>
                            Email: info@puc.ac.bd
                        </address>
                </div>

                <div class="flex items-end justify-end text-sm text-gray-500">
                    © 2025 Premier University Chittagong Alumni. <br>
                    All rights reserved.
                </div>
            </div>
        </footer>

    </body>
</html>