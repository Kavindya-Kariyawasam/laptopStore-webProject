const btn = document.querySelector(".hamburger");
const nav = document.querySelector(".mobile-menu");

function navToggle() {
  btn.classList.toggle("open");
  nav.classList.toggle("hidden");
  nav.classList.toggle("active");
  document.body.classList.toggle("no-scroll");
}

btn.addEventListener("click", navToggle);
