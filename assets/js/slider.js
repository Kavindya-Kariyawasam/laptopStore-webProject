// Slider Variables
let currentSlide = 0;
const totalSlides = 6;

// Function to display a specific slide
function showSlide(index) {
  const slider = document.querySelector(".slider");
  const slideWidth = 100; // Each slide is 100% width
  slider.style.transform = `translateX(-${index * slideWidth}%)`;
}

// Navigate to next slide
function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  showSlide(currentSlide);
}

// Navigate to previous slide
function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  showSlide(currentSlide);
}

// Auto slide every 4 seconds
setInterval(nextSlide, 4000);
