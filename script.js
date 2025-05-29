document.querySelectorAll('.navbar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

let index = 0;
const images = document.querySelectorAll(".project-img");

function changeImage(direction) {
    images[index].style.display = "none"; // Hide current image
    index = (index + direction + images.length) % images.length; // Navigate images
    images[index].style.display = "block"; // Show new image
}
