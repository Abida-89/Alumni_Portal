<?php
  include 'connect.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // Collect and sanitize form data
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $linkedin = $_POST['linkedin'];
      $birthday = $_POST['birthday'];
      $gender = $_POST['gender'];
      $bloodgrp = $_POST['bloodgrp'];
      $degree = $_POST['degree'];
      $dept = $_POST['dept'];
      $passingyr = $_POST['passingyr'];
      $batch = $_POST['batch'];
      $designation = $_POST['designation'];
      $company = $_POST['company'];
      $professional_info = $_POST['professional_info'];
      $work_experience = $_POST['work_experience'];
      $username = $_POST['username'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Upload profile picture
      $profileImage = '';
      if (isset($_FILES['profilepic']) && $_FILES['profilepic']['error'] == 0) {
          $targetDir = "uploads/";
          if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
          }
          $profileImage = $targetDir . basename($_FILES["profilepic"]["name"]);
          move_uploaded_file($_FILES["profilepic"]["tmp_name"], $profileImage);
        } 


      // Insert into database
      $sql = "INSERT INTO alumni_list (firstname, lastname, email, mobile, linkedin, birthday, gender, bloodgrp, degree, dept, passingyr, batch, designation, company, professional_info, work_experience, username, password, profilepic)
              VALUES ('$firstname', '$lastname', '$email', '$mobile', '$linkedin', '$birthday', '$gender', '$bloodgrp', '$degree', '$dept', '$passingyr', '$batch', '$designation', '$company', '$professional_info', '$work_experience', '$username', '$password', '$profileImage')";

      if ($conn->query($sql) === TRUE) {
          echo "Registration successful!";
      } 
      else {
          echo "Error: " . $conn->error;
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Member Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="register.css" />
  </head>

  <body>
    <main class="container py-4">
      <form method="POST" action="" enctype="multipart/form-data" class="bg-white rounded-3 p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center fw-semibold text-secondary mb-4" style="font-size: 0.875rem;">Member Registration</h2>     
        
        <div class="profile-pic-container mb-4" aria-label="Profile picture placeholder">
          <img id="profileImage" alt="Placeholder" src="https://storage.googleapis.com/a1aa/image/a5f4cf77-1f46-4bed-8bbc-f6e489c36113.jpg" />
            <label for="profilepic" class="form-label" role="button" tabindex="0" aria-label="Upload profile picture">
              <i class="fas fa-camera"></i>
            </label>
          <input type="file" name="profilepic" id="profilepic" accept="image/*" hidden onchange="previewProfilePicture(this)" required/>
        </div>

        <!-- Personal Information -->
        <fieldset class="mb-4">
          <legend class="form-label mb-2">Personal Information</legend>
            <div class="row g-3">

              <div class="col-12 col-sm-6">
                <input type="text" name="firstname" class="form-control" placeholder="First name" required />
              </div>

              <div class="col-12 col-sm-6">
                <input type="text" name="lastname" class="form-control" placeholder="Last name" required />
              </div>
              
              <div class="col-12 col-sm-4">
                <input type="email" name="email" class="form-control" placeholder="Email" required />
              </div>

              <div class="col-12 col-sm-4">
                <input type="tel" name="mobile" class="form-control" placeholder="Mobile" required />
              </div>

              <div class="col-12 col-sm-4">
                <input type="url" name="linkedin" class="form-control" placeholder="LinkedIn Profile URL" />
              </div>

              <div class="col-12 col-sm-2">
                <input type="date" name="birthday" class="form-control" placeholder="Date of Birth" required/>
              </div>

              <div class="col-12 col-sm-3">
                <select name="gender" class="form-select">
                  <option selected disabled>Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>

            <div class="col-12 col-sm-3">
              <select name="bloodgrp" class="form-select">
                <option selected disabled>Blood Group</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
              </select>
            </div>

          </div>
        </fieldset>

        <!-- Institution Information -->
        <fieldset class="mb-4">
          <legend class="form-label mb-2">Institution Information</legend>
          <div class="row g-3">
            <div class="col-12 col-sm-4">
              <select name="degree" class="form-select">
                <option selected>BSc</option>
                <option>MSc</option>
                <option>PhD</option>
              </select>
            </div>
            <div class="col-12 col-sm-4">
              <select name="dept" class="form-select">
                <option selected disabled>Department</option>
                <option>CSE</option>
                <option>EEE</option>
                <option>LLB</option>
                <option>Architechture</option>
                <option>Economics</option>
                <option>DELL</option>
              </select>
            </div>
            <div class="col-12 col-sm-4">
              <input type="text" name="passingyr" class="form-control" placeholder="Passing Year" />
            </div>
            <div class="col-12 col-sm-4">
              <input type="text" name="batch" class="form-control" placeholder="Batch" />
            </div>
          </div>
        </fieldset>

        <!-- Professional Information -->
        <fieldset class="mb-4">
          <legend class="form-label mb-2">Professional Information</legend>
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <input type="text" name="designation" class="form-control" placeholder="Designation" />
            </div>

            <div class="col-12 col-sm-6">
              <input type="text" name="company" class="form-control" placeholder="Company Name" />
            </div>

            <div class="col-12 col-sm-6">
              <input type="text" name="professional_info" class="form-control" placeholder="Professional Info" />
            </div>

            <div class="col-12 col-sm-6">
              <input type="number" min="0" name="work_experience" class="form-control" placeholder="Work Experience (Years)" />
            </div>

          </div>
        </fieldset>

        <!-- Portal Access -->
        <fieldset class="mb-3">
          <legend class="form-label mb-2">Portal Access</legend>
          <div class="row g-3">
            <div class="col-12 col-sm-4">
              <input type="text" name="username" class="form-control" placeholder="Username" required />
            </div>

            <div class="col-12 col-sm-4 password-toggle">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
              <i class="fas fa-eye" role="button" onclick="togglePassword('password', this)"></i>
            </div>

            <div class="col-12 col-sm-4 password-toggle">
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required />
              <i class="fas fa-eye-slash" role="button" onclick="togglePassword('confirmPassword', this)"></i>
            </div>

          </div>
        </fieldset>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="declaration" name="declaration" required />
          <label>Tick here, If you are a Alumni.</label>
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-preview">Register</button>
        </div>
      </form>
    </main>

  <script src="register.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
