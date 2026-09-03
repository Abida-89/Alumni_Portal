    
    const signUpButton=document.getElementById('signUpButton');
    const loginButton=document.getElementById('loginButton');
    const loginForm=document.getElementById('login');
    const signUpForm=document.getElementById('signup');

    signUpButton.addEventListener('click',function(){
        loginForm.style.display="none";
        signUpForm.style.display="block";
    })
    loginButton.addEventListener('click', function(){
        loginForm.style.display="block";
        signUpForm.style.display="none";
    })