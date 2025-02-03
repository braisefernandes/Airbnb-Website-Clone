const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
});
function navigateToHome() {
    window.location.href = '/Airbnb_website/Home_page/booking.php';
}

let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
function showSlide(index) {
    if (index >= slides.length) { slideIndex = 0; }
    if (index < 0) { slideIndex = slides.length - 1; }
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${(i - slideIndex) * 100}%)`;
    });
}
function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}
function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}
showSlide(slideIndex);