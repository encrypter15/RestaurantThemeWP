// RestaurantTheme JavaScript
// Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0

document.addEventListener('DOMContentLoaded', () => {
    // Smooth scroll for nav links (if needed)
    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Contact form submission (demo)
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', e => {
            e.preventDefault();
            alert('Message sent! Integrate with a contact plugin like Contact Form 7 for production.');
            contactForm.reset();
        });
    }

    // Reservation form (demo, integrate with OpenTable plugin)
    const reservationForm = document.getElementById('reservation-form');
    const reservationStatus = document.getElementById('reservation-status');
    if (reservationForm && reservationStatus) {
        reservationForm.addEventListener('submit', e => {
            e.preventDefault();
            reservationStatus.textContent = 'Reservation submitted! Use an OpenTable plugin for real functionality.';
            reservationForm.reset();
        });
    }

    // Section animations
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => {
        section.classList.add('fade-in');
        observer.observe(section);
    });
});

// Add visible class for animations
const style = document.createElement('style');
style.innerHTML = `
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s, transform 0.5s;
    }
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }
`;
document.head.appendChild(style);
