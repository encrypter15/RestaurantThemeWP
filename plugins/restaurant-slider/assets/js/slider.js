// Restaurant Slider JavaScript
// Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0

document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.restaurant-slider');
    sliders.forEach(slider => {
        const track = slider.querySelector('.slider-track');
        const slides = slider.querySelectorAll('.slide');
        const prevBtn = slider.querySelector('.slider-prev');
        const nextBtn = slider.querySelector('.slider-next');
        const dotsContainer = slider.querySelector('.slider-dots');
        let currentIndex = 0;

        // Create dots
        slides.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.dot');

        function updateSlider() {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function goToSlide(index) {
            currentIndex = index % slides.length;
            if (currentIndex < 0) currentIndex += slides.length;
            updateSlider();
        }

        prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
        nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));

        // Autoplay (controlled by settings)
        let autoplay = true; // Default, overridden by admin setting
        fetch('/wp-admin/admin-ajax.php?action=restaurant_slider_autoplay')
            .then(res => res.json())
            .then(data => {
                autoplay = data.autoplay;
                if (autoplay) {
                    setInterval(() => goToSlide(currentIndex + 1), 5000);
                }
            });
    });
});

// AJAX handler for autoplay setting
jQuery.post(ajaxurl, { action: 'restaurant_slider_autoplay' }, function(response) {
    document.dispatchEvent(new CustomEvent('restaurantSliderSettings', { detail: response }));
});
