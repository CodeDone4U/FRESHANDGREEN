
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fades");
  });
});


const menuIcon = document.querySelector(".hamburger");

menuIcon.addEventListener("click", () => {
    menuIcon.classList.toggle("changelines");
    // No Scroll in Menu function"
    let fix = document.querySelector("body");
    fix.classList.toggle("fixed-menu");
});