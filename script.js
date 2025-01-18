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

    const hideImage = (index) => {
        return new Promise((resolve) => {
            sliderImages[index].style.transform = 'translateX(100%)';
            sliderImages[index].style.opacity = '0';
            setTimeout(resolve, 500); // Wait for transition to complete
        });
    };

    const showImage = (index) => {
        sliderImages.forEach((img, i) => {
            if (i === index) {
                img.style.transform = 'translateX(0)';
                img.style.opacity = '1';
            } else if (i !== currentImage) {
                img.style.transform = 'translateX(100%)';
                img.style.opacity = '0';
            }
        });
    };

    const nextImage = async () => {
        await hideImage(currentImage);
        currentImage = (currentImage + 1) % totalImages;
        showImage(currentImage);
    };

    const startSlider = () => {
        sliderInterval = setInterval(nextImage, 3000);
    };

    const stopSlider = () => {
        clearInterval(sliderInterval);
    };

    showImage(currentImage);
    startSlider();

    document.querySelectorAll('[data-skill]').forEach(element => {
        const skill = element.getAttribute('data-skill');
        const relatedDiv = document.querySelector(`div[data-skill="${skill}"]`);
        const relatedWord = document.querySelector(`span[data-skill="${skill}"]`);

        if (relatedDiv && relatedWord) {
            // When hovering over the word, add shadow to the SVG container div
            relatedWord.addEventListener('mouseenter', () => {
                relatedDiv.classList.add('shadow-lg', 'shadow-orange-500');
                relatedDiv.style.boxShadow = '0 0 10px 5px orange';
                relatedDiv.style.transition = 'box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out';
                relatedDiv.style.transform = 'scale(1.1)';
            });
            relatedWord.addEventListener('mouseleave', () => {
                relatedDiv.classList.remove('shadow-lg', 'shadow-orange-500');
                relatedDiv.style.boxShadow = 'none';
                relatedDiv.style.transition = 'box-shadow 0.5s ease-in-out, transform 0.5s ease-in-out';
                relatedDiv.style.transform = 'scale(1)';
            });

            // When hovering over the SVG container div, add text shadow to the word
            relatedDiv.addEventListener('mouseenter', () => {
                relatedWord.classList.add('text-shadow-lg', 'text-shadow-orange-500');
            });
            relatedDiv.addEventListener('mouseleave', () => {
                relatedWord.classList.remove('text-shadow-lg', 'text-shadow-orange-500');
            });
        }
    });
});