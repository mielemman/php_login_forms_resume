const loginForm = document.getElementById("login-form");
const signupForm = document.getElementById("signup-form");
const showSignup = document.getElementById("show-signup");
const showLogin = document.getElementById("show-login");

// Grab the message element (if it exists)
const messageBox = document.querySelector(".form-box p");

// Switch to Signup
showSignup.addEventListener("click", (e) => {
  e.preventDefault();
  loginForm.classList.remove("active");
  signupForm.classList.add("active");

  // Clear messages when switching
  if (messageBox) messageBox.style.display = "none";
});

// Switch to Login
showLogin.addEventListener("click", (e) => {
  e.preventDefault();
  signupForm.classList.remove("active");
  loginForm.classList.add("active");

  // Clear messages when switching
  if (messageBox) messageBox.style.display = "none";
});

// Toggle password visibility
const toggles = document.querySelectorAll(".toggle-password");
toggles.forEach(icon => {
  icon.addEventListener("click", () => {
    const targetId = icon.getAttribute("data-target");
    const input = document.getElementById(targetId);
    if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    } else {
      input.type = "password";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    }
  });
});
