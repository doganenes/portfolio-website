// Selectors
let link1 = "https://todoapp-website.netlify.app/";
let link2 = "https://medium-clone-bootstrap.vercel.app/";
let link3 = "https://kitchen-menu-website.netlify.app/";
let link4 = "https://personal-portfolio-website-project.netlify.app/";
let link5 = "https://technical-documentation-page-project.netlify.app/";
let link6 = "https://survey-form-project.vercel.app/";

let card1 = document.querySelector(".card-1");
let card2 = document.querySelector(".card-2");
let card3 = document.querySelector(".card-3");
let card4 = document.querySelector(".card-4");
let card5 = document.querySelector(".card-5");
let card6 = document.querySelector(".card-6");

const menuBtn = document.querySelector(".menu-btn");
let menuOpen = false;

// addEventListeners
card1.addEventListener("click", () => {
  window.open(link1);
});
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

const navTag = document.querySelector(".navTag");
menuBtn.addEventListener("click", () => {
  navTag.classList.toggle("active");
});
