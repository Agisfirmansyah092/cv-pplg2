document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('#student-search');
    const clearButton = document.querySelector('.clear-search');
    const cards = Array.from(document.querySelectorAll('[data-student-card]'));
    const searchCount = document.querySelector('.search-count');
    const noResults = document.querySelector('.no-results');
    const searchShortcut = document.querySelector('.search-shortcut');
    const navLinks = Array.from(document.querySelectorAll('.nav-link'));
    const filterButtons = Array.from(document.querySelectorAll('[data-category-filter]'));
    let activeCategory = 'all';

    if (!searchInput || !clearButton || !searchCount || !noResults) {
        return;
    }

    const filterCards = () => {
        const query = searchInput.value.trim().toLocaleLowerCase('id');
        let visibleCount = 0;

        cards.forEach((card) => {
            const name = (card.dataset.name || '').toLocaleLowerCase('id');
            const matchesQuery = name.includes(query);
            const matchesCategory = activeCategory === 'all' || card.dataset.category === activeCategory;
            const matches = matchesQuery && matchesCategory;

            card.hidden = !matches;
            if (matches) {
                visibleCount += 1;
            }
        });

        clearButton.hidden = query.length === 0;
        noResults.hidden = visibleCount !== 0;
        searchCount.textContent = query || activeCategory !== 'all'
            ? `${visibleCount} dari ${cards.length} profil ditampilkan`
            : `${cards.length} profil dalam direktori`;
    };

    searchInput.addEventListener('input', filterCards);
    clearButton.addEventListener('click', () => {
        searchInput.value = '';
        filterCards();
        searchInput.focus();
    });

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            activeCategory = button.dataset.categoryFilter || 'all';
            filterButtons.forEach((filterButton) => {
                const isActive = filterButton === button;
                filterButton.classList.toggle('is-active', isActive);
                filterButton.setAttribute('aria-pressed', String(isActive));
            });
            filterCards();
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === '/' && !event.ctrlKey && !event.metaKey && !event.altKey) {
            const target = event.target;
            const isTyping = target instanceof HTMLElement
                && (target.isContentEditable || ['INPUT', 'TEXTAREA', 'SELECT'].includes(target.tagName));

            if (!isTyping) {
                event.preventDefault();
                searchInput.focus();
            }
        }
    });

    navLinks.forEach((link) => {
        link.addEventListener('click', () => {
            navLinks.forEach((navLink) => navLink.classList.toggle('is-current', navLink === link));
        });
    });

    if (searchShortcut) {
        searchShortcut.title = 'Tekan / untuk mencari';
    }
});
