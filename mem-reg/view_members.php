<?php

    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login-page/login.php");
        exit();
    }

    include 'connect.php';
    // Handle deletion if "id" is passed
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']); // safer

        $delete_sql = "DELETE FROM alumni_list WHERE id = $id";

        if ($conn->query($delete_sql) === TRUE) {
            echo "<script>alert('Profile deleted successfully.'); window.location.href='view_members.php';</script>";
            exit();
        } else {
            echo "Error deleting profile: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>PUC Alumni </title>
        <link rel="icon" href="../img/pucLogo.jpg">

        <script src="https://cdn.tailwindcss.com"></script>       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
        <link href="register.css" rel="stylesheet"/>
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
                
                <!-- Register/Back Buttons -->
                <div class="flex space-x-3">
                    <a href="register-form.php"><button class="bg-blue-600 text-white font-semibold rounded px-3 py-1 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600" id="registerBtn">Register Member</button></a>
                    <a href="../index.php"><button class="bg-blue-600 text-white font-semibold rounded px-3 py-1 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600" id="backBtn">Back</button></a>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row g-4">

            <!-- Alumni Section -->
            <section class="max-w-7xl mx-auto space-y-6" id="alumni">
                <h2 class=" text-3xl font-bold text-blue-600 mb-4"><center>Meet our Alumni</center></h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                
                    <!-- Alumni Card 1 -->
                    <div aria-pressed="false" class="alumni-card bg-white rounded-xl shadow-md p-4 flex flex-col items-right text-right-align cursor-pointer" data-alumni-id="1" role="button" tabindex="0">
                        <a class="alumni-profile" href="../alumni1.php"><img alt="Portrait of Alumni member 1" class="rounded-full w-36 h-36 object-cover mb-4" height="150" src="../img/alumni1.png" width="150"/>
                        <h3 class="font-semibold text-lg text-gray-900">Mohammed Mohiuddin</h3>                 
                        <p><strong>Email:</strong> mohiuddin2531@gmail.com</p>
                        <p><strong>Batch:</strong> 37th</p>
                        <p><strong>Professional Info:</strong>Coding Instructor</p>
                        <p><strong>Company:</strong>Dreamers Academy</p></a>                           
                    </div>

                    <!-- Alumni Card 2 -->
                    <div aria-pressed="false" class="alumni-card bg-white rounded-xl shadow-md p-4 flex flex-col items-right text-right-align cursor-pointer" data-alumni-id="2" role="button" tabindex="0">
                        <a class="alumni-profile" href="../alumni2.php"><img alt="Portrait of Alumni member 2" class="rounded-full w-36 h-36 object-cover mb-4" height="150" src="../img/alumni2.jpg" width="150"/>
                        <h3 class="font-semibold text-lg text-gray-900">Nasrin Jahan Ripa</h3>
                        <p><strong>Email:</strong> ripa.cse.puc.bd@gmail.com</p>
                        <p><strong>Batch:</strong> 37th</p>
                        <p><strong>Professional Info:</strong> Front-End developer</p>
                        <p><strong>Company:</strong>Nexlent</p></a>
                    </div>

                    <!-- Alumni Card 3 -->
                    <div aria-pressed="false" class="alumni-card bg-white rounded-xl shadow-md p-4 flex flex-col items-right text-right-align cursor-pointer" data-alumni-id="3" role="button" tabindex="0">
                        <a class="alumni-profile" href="../alumni3.php"><img alt="Portrait of Alumni member 3" class="rounded-full w-36 h-36 object-cover mb-4" height="150" src="../img/alumni3.jpg" width="150"/>
                        <h3 class="font-semibold text-lg text-gray-900">Kazi Md Amirul Islam</h3>
                        <p><strong>Email:</strong> amirulislam00026@gmail.com</p>
                        <p><strong>Batch:</strong> 29th</p>
                        <p><strong>Professional Info:</strong>Software Engineer-L2</p>
                        <p><strong>Company:</strong>Brain Station 23</p></a>     
                    </div>
                    
                </div>
            </section>

        <?php
            $sql = "SELECT * FROM alumni_list";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>

            <div class="col-md-4">
                <div class="card h-100 shadow">
                    <img src="<?php echo $row['profilepic'] ? $row['profilepic'] : 'default.jpg'; ?>" class="rounded-full w-36 h-36 object-cover mb-4" height="150" width="150"/ alt="Profile Picture" ; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['firstname']." ".$row['lastname']; ?></h5>
                        <p class="card-text">
                            <strong>Email:</strong> <?php echo $row['email']; ?><br>
                            <strong>Batch:</strong> <?php echo $row['batch']; ?><br>
                            <strong>LinkedIn:</strong> <a href="<?php echo $row['linkedin']; ?>" target="_blank">Profile</a><br>
                            <strong>Professional Info:</strong> <?php echo $row['designation']; ?><br>  
                            <strong>Company Name:</strong> <?php echo $row['company']; ?><br>
                        </p>
                    </div>

                    <div class="card-footer text-center">
                        <a href="view_members.php?id=<?php echo $row['id']; ?>" 
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete your profile?');">
                            Delete Profile
                        </a>
                    </div>
                
                </div>
            </div>
            
            <?php
                    }
                } 
                $conn->close();
            ?>
            
            </div>
        </div>   
    </div>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-300 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-white font-bold text-lg mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a class="hover:text-white" href="index.php">Home</a></li>
                            <li><a class="hover:text-white" href="about.php">About</a></li>
                            <li><a class="hover:text-white" href="mem-reg/view_members.php">Alumni</a></li>
                            <li><a class="hover:text-white" href="#event">Event</a></li>
                            <li><a class="hover:text-white" href="jobs.html">Jobs & Opportunities</a></li>
                            <li><a class="hover:text-white" href="#contact">Contact Us</a></li>
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
                    © 2025 Premier University Chittagong Alumni. All rights reserved.
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
