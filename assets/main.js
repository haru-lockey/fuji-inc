document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-toggle');
    const mobileMenuPanel = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenuPanel) {
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuCloseButton = document.getElementById('mobile-menu-close');

        const openMenu = () => {
            mobileMenuPanel.classList.remove('translate-x-full');
            mobileMenuPanel.classList.add('translate-x-0');
            mobileMenuOverlay.classList.remove('opacity-0');
            mobileMenuOverlay.classList.add('opacity-50'); // Adjusted for thinner/lighter overlay
            mobileMenuButton.setAttribute('aria-expanded', 'true');
        };

        const closeMenu = () => {
            mobileMenuPanel.classList.remove('translate-x-0');
            mobileMenuPanel.classList.add('translate-x-full');
            mobileMenuOverlay.classList.remove('opacity-50');
            mobileMenuOverlay.classList.add('opacity-0');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        };

        mobileMenuButton.addEventListener('click', openMenu);
        mobileMenuCloseButton.addEventListener('click', closeMenu);
        mobileMenuOverlay.addEventListener('click', closeMenu); // Close when clicking overlay
    }

    // --- Mobile Submenu Toggle Logic ---
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
        const submenuToggles = mobileMenu.querySelectorAll('.mobile-submenu-toggle');

        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);

                // The submenu is the next element sibling of the li
                const submenu = this.closest('li.menu-item-has-children').querySelector('.sub-menu');
                if (submenu) {
                    submenu.classList.toggle('hidden');
                }

                const svg = this.querySelector('svg');
                if (svg) {
                    svg.classList.toggle('rotate-180');
                }
            });
        });
    }
});