let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   navbar.classList.remove('active');
}



function togglePasswordVisibility() {
   var passwordInput = document.getElementById("password");
   var toggleButton = document.getElementById("togglePassword");

   if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
   } else {
      passwordInput.type = "password";
      toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
   }
}



