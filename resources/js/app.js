import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        dark: false,

        init() {
            // Read persisted preference; fall back to OS preference
            this.dark = localStorage.theme === 'dark' ||
                (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
        },

        toggle() {
            this.dark = !this.dark;
            localStorage.theme = this.dark ? 'dark' : 'light';
            // Toggle the 'dark' class on <html> per Tailwind's class strategy
            document.documentElement.classList.toggle('dark', this.dark);
        },
    });
});

Alpine.start();

