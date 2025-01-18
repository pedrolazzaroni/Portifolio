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
            // When hovering over the skill word
            relatedWord.addEventListener('mouseenter', () => {
                relatedDiv.style.boxShadow = '0 0 10px 5px orange';
                relatedDiv.style.transition = 'box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out';
                relatedDiv.style.transform = 'scale(1.1)';
                relatedWord.style.paddingLeft = '5px';
                relatedWord.style.paddingRight = '5px';
                relatedWord.style.borderRadius = '10px';
                relatedWord.style.boxShadow = '0 0 10px orange';
                relatedWord.style.transition = 'text-shadow 0.2s ease-in-out, padding-left 0.2s ease-in-out, padding-right 0.2s ease-in-out, border-radius 0.2s ease-in-out';
            });
            relatedWord.addEventListener('mouseleave', () => {
                relatedDiv.style.boxShadow = '';
                relatedDiv.style.transform = '';
                relatedWord.style.boxShadow = '';
                relatedWord.style.paddingLeft = '';
                relatedWord.style.paddingRight = '';
                relatedWord.style.borderRadius = '';
            });

            // When hovering over the SVG container div
            relatedDiv.addEventListener('mouseenter', () => {
                relatedDiv.style.boxShadow = '0 0 10px 5px orange';
                relatedDiv.style.transition = 'box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out';
                relatedDiv.style.transform = 'scale(1.1)';
                relatedWord.style.paddingLeft = '5px';
                relatedWord.style.paddingRight = '5px';
                relatedWord.style.borderRadius = '10px';
                relatedWord.style.boxShadow = '0 0 10px orange';
                relatedWord.style.transition = 'text-shadow 0.2s ease-in-out, padding-left 0.2s ease-in-out, padding-right 0.2s ease-in-out, border-radius 0.2s ease-in-out';
            });
            relatedDiv.addEventListener('mouseleave', () => {
                relatedDiv.style.boxShadow = '';
                relatedDiv.style.transform = '';
                relatedWord.style.boxShadow = '';
                relatedWord.style.paddingLeft = '';
                relatedWord.style.paddingRight = '';
                relatedWord.style.borderRadius = '';
            });
        }
    });
});