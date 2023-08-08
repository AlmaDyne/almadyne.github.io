'use strict';

const timeNewsLabels = document.querySelectorAll('.TimeNews');
const nav = document.querySelector('nav');

for (let label of timeNewsLabels) {
    label.addEventListener('click', () => {
        window.scrollBy(0, label.getBoundingClientRect().y - nav.offsetHeight);
    });
}
