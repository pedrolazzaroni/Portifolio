document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    
    const sliderImages = document.querySelectorAll('#projetos img');
    let currentImage = 0;
    const totalImages = sliderImages.length;
    let sliderInterval;

    const showImage = (index) => {
        sliderImages.forEach((img, i) => {
            img.style.opacity = i === index ? '1' : '0';
        });
    };

    const nextImage = () => {
        currentImage = (currentImage + 1) % totalImages;
        showImage(currentImage);
    };

    // Start automatic slider
    const startSlider = () => {
        sliderInterval = setInterval(nextImage, 2000);
    };

    // Stop automatic slider
    const stopSlider = () => {
        clearInterval(sliderInterval);
    };
    nextImage();
    stopSlider();
    startSlider();

    showImage(currentImage);
    startSlider();
});