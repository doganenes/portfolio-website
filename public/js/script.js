let link1 = "https://github.com/doganenes/todo-app";
let link2 = "review-slider-livedemo.netlify.app";
let link3 = "https://github.com/doganenes/react-weather-app";
let link4 = "https://personal-portfolio-website-project.netlify.app/";
let link5 = "https://doganenes.github.io/quiz-app/";
let link6 = "https://filter-search-app-livedemo.netlify.app/";

let card2 = document.querySelector(".card-2");
let card3 = document.querySelector(".card-3");
let card4 = document.querySelector(".card-4");
let card5 = document.querySelector(".card-5");
let card6 = document.querySelector(".card-6");

const menuBtn = document.querySelector(".menu-btn");
let menuOpen = false;

card2.addEventListener("click", () => {
    window.open(link2);
});
card3.addEventListener("click", () => {
    window.open(link3);
});
card4.addEventListener("click", () => {
    window.open(link4);
});
card5.addEventListener("click", () => {
    window.open(link5);
});
card6.addEventListener("click", () => {
    window.open(link6);
});

menuBtn.addEventListener("click", () => {
    if (!menuOpen) {
        menuBtn.classList.add("open");
        menuOpen = true;
    } else {
        menuBtn.classList.remove("open");
        menuOpen = false;
    }
});

const navTag = document.getElementById("navTag");
var navLink = navTag.getElementsByClassName("nav-link__a");
menuBtn.addEventListener("click", () => {
    navTag.classList.toggle("activeMenu");
});

for (var i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

window.addEventListener("scroll", function () {
    var aboutSection = document.getElementById("about");
    var projectsSection = document.getElementById("projects");
    var contactSection = document.getElementById("contact");
    var aboutLink = document.getElementById("aboutLink");
    var projectsLink = document.getElementById("projectsLink");
    var contactLink = document.getElementById("contactLink");
    var scrollPosition = window.scrollY;

    if (
        scrollPosition >= aboutSection.offsetTop - 100 &&
        scrollPosition < projectsSection.offsetTop - 100
    ) {
        aboutLink.classList.add("active");
        projectsLink.classList.remove("active");
        contactLink.classList.remove("active");
    } else if (
        scrollPosition >= projectsSection.offsetTop - 100 &&
        scrollPosition < contactSection.offsetTop - 100
    ) {
        projectsLink.classList.add("active");
        aboutLink.classList.remove("active");
        contactLink.classList.remove("active");
    } else if (scrollPosition > contactSection.offsetTop - 100) {
        contactLink.classList.add("active");
        aboutLink.classList.remove("active");
        projectsLink.classList.remove("active");
    } else {
        contactLink.classList.remove("active");
        aboutLink.classList.remove("active");
        projectsLink.classList.remove("active");
    }
});
