// RestaurantTheme Shop JavaScript
// Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0

document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productGrid = document.querySelector('.grid');

    if (filterButtons.length && productGrid) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const cards = productGrid.querySelectorAll('.card');
                cards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });

                productGrid.style.opacity = '0';
                setTimeout(() => {
                    productGrid.style.opacity = '1';
                }, 300);
            });
        });
    }
});
