
  document.addEventListener("DOMContentLoaded", () => {
    // slider code
    const slider = document.getElementById("slider");
    const slides = slider.children;
    const totalSlides = slides.length;
    let activeSlideIndex = 0;
  
    const nextBtn = document.getElementById("nextSlide");
    const prevBtn = document.getElementById("prevSlide");
  
    function updateSlider() {
      slider.style.transform = `translateX(-${activeSlideIndex * 100}%)`;
    }
  
    nextBtn.addEventListener("click", () => {
      activeSlideIndex = (activeSlideIndex + 1) % totalSlides;
      updateSlider();
    });

    prevBtn.addEventListener("click", () => {
      activeSlideIndex = (activeSlideIndex - 1 + totalSlides) % totalSlides;
      updateSlider();
    });
  
    // Scroll Animations
  const scrollElements = document.querySelectorAll('.scroll-animate');
  function elementInView(el, dividend = 1.25) {
    const elementTop = el.getBoundingClientRect().top;
    return elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend;
  }
  function displayScrollElement(el) {
    el.classList.add('scrolled');
  }
  function hideScrollElement(el) {
    el.classList.remove('scrolled');
  }
  function handleScrollAnimation() {
    scrollElements.forEach(el => {
      if (elementInView(el)) {
        displayScrollElement(el);
      } else {
        hideScrollElement(el);
      }
    });
  }
  window.addEventListener('scroll', handleScrollAnimation);
  window.addEventListener('load', handleScrollAnimation);

    });
    // Auto Slider Code
  document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider-images');
    const slides = document.querySelectorAll('.slider-image');
    const totalSlides = slides.length;
    let currentSlide = 0;

    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }, 3000); // Slide every 3 seconds
});





