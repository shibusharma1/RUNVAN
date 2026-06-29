const filterButtons = document.querySelectorAll('.publication-filter');
const cards = document.querySelectorAll('.publication-card');

filterButtons.forEach(button => {

    button.addEventListener('click', () => {

        filterButtons.forEach(btn =>
            btn.classList.remove('active-filter')
        );

        button.classList.add('active-filter');

        const filter = button.dataset.filter;

        cards.forEach(card => {

            const category = card.dataset.category;

            if (
                filter === 'all' ||
                category === filter
            ) {

                card.style.display = 'block';

                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);

            } else {

                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    card.style.display = 'none';
                }, 250);

            }

        });

    });

});