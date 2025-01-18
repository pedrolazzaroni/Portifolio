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
        const relatedSVG = document.querySelector(`div[data-skill="${skill}"] img`);
        const relatedWord = document.querySelector(`span[data-skill="${skill}"]`);

        if (relatedSVG && relatedWord) {
            // When hovering over the word, enlarge the SVG
            relatedWord.addEventListener('mouseenter', () => {
                relatedSVG.classList.add('scale-110');
            });
            relatedWord.addEventListener('mouseleave', () => {
                relatedSVG.classList.remove('scale-110');
            });

            // When hovering over the SVG, enlarge the word
            relatedSVG.addEventListener('mouseenter', () => {
                relatedWord.classList.add('text-4xl');
            });
            relatedSVG.addEventListener('mouseleave', () => {
                relatedWord.classList.remove('text-4xl');
            });
        }
    });
});