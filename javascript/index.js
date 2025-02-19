/****************
 Select the navbar
*****************/
const navbar = document.querySelector('.navbar');

// Add/remove the scrolled class based on scroll position
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});


/*******************
For scroll animation
********************/
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".animation");
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("show");
          } else {
            entry.target.classList.remove("show");
          }
        });
      },
      { threshold: 0.2 }
    );
  
    elements.forEach((element) => {
      observer.observe(element);
    });
  });