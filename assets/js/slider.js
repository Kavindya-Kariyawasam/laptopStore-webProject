document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slider img');
    const slideWidth = slides[0].clientWidth;
    let counter = 1; // Start at 1 to skip the cloned first slide
  
    function nextSlide() {
      counter++;
      slider.style.transition = "transform 0.5s ease-in-out";
      slider.style.transform = `translateX(-${counter * slideWidth}px)`;
  
      // Reset to the original slides when reaching the cloned ones
      if (counter >= slides.length - 1) {
        setTimeout(() => {
          slider.style.transition = "none";
          counter = 1;
          slider.style.transform = `translateX(-${counter * slideWidth}px)`;
        }, 2000); // Wait for the transition to complete before resetting
      }
    }
  
    setInterval(nextSlide, 2000);
  });
  