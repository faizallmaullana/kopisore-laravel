var galleryItems = document.querySelectorAll('.gallery-item');
var currentIndex = 0;

function showNextImage() {
    galleryItems[currentIndex].style.display = 'none';
    currentIndex = (currentIndex + 1) % galleryItems.length;
    galleryItems[currentIndex].style.display = 'block';
}

// Hide all images except the first one
for (var i = 1; i < galleryItems.length; i++) {
    galleryItems[i].style.display = 'none';
}

setInterval(showNextImage, 3000); // Change image every 3 seconds
