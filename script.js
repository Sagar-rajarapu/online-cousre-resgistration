const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});
// JavaScript Validation
function validateForm() {
  // Email Validation
  var email = document.forms["login"]["email"].value;
  var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{3,3}$/;
  if (!email.match(emailPattern)) {
      alert("Please enter a valid email address.");
      return false;
  }

  // Phone Number Validation
  var phone = document.forms["signup"]["phone"].value;
  var phonePattern = /^[0-9]{10}$/;
  if (!phone.match(phonePattern)) {
      alert("Please enter a valid 10-digit phone number.");
      return false;
  }

  // OTP Validation
  var otp = document.forms["login","signup"]["otp"].value;
  var otpPattern = /^[0-9]{4}$/;
  if (!otp.match(otpPattern)) {
      alert("Please enter a valid 4-digit OTP.");
      return false;
  }
}
