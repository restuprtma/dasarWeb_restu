$(document).ready(function () {
  // Array of testimonials (images)
  var testimonials = [
    "img/testi1.jpg",
    "img/testi2.jpg",
    "img/testi3.jpg",
    "img/testi4.jpg",
    "img/testi5.jpg",
    "img/testi6.jpg",
    "img/testi7.jpg",
    "img/testi8.jpg",
    "img/testi9.jpg",
    "img/testi10.jpg",
    "img/testi11.jpg",
    "img/testi12.jpg",
    "img/testi13.jpg",
    "img/testi14.jpg",
    "img/testi15.jpg",
    "img/testi16.jpg",
    "img/testi17.jpg",
    "img/testi18.jpg",
    "img/testi19.jpg",
  ];

  // Append testimonial images to the div
  testimonials.forEach(function (image) {
    $("#testimonial-images").append(
      '<img src="' + image + '" alt="Cleaned Shoe">'
    );
  });

  // Variables for the slider
  var totalImages = testimonials.length;
  var visibleImages = 5;
  var currentIndex = 0;

  // Function to slide the testimonials
  function slideTestimonials() {
    currentIndex = (currentIndex + 1) % (totalImages - visibleImages + 1);
    $("#testimonial-images").css(
      "transform",
      "translateX(" + -currentIndex * 20 + "%)"
    );
  }

  // Set interval for automatic sliding
  setInterval(slideTestimonials, 3000); // Slides every 3 seconds
});