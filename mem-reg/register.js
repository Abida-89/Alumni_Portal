
function previewProfilePicture(input) {
  const file = input.files[0];
  if (file) {
    document.getElementById('profilepic').src = URL.createObjectURL(file);
  }
}

function togglePassword(inputId, icon) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      input.type = "password";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    }
  }
  

  //profile picture
  
function previewProfilePicture(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function (e) {
      document.getElementById('profileImage').src = e.target.result;
    };
    
    reader.readAsDataURL(input.files[0]);
  }
}

