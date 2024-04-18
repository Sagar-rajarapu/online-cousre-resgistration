//utilities.js
let navbar =`
<div class="navbar">
          <a href="index.html">
            <img src="logo.PNG" class="logo">
        </a>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="course.html">Course</a></li>
            <li><a href="updates.html">Updates</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
    
          </ul>
        </div>
`
function loadMenu(){
 document.getElementById("nav").innerHTML = navbar
}
