document.addEventListener("DOMContentLoaded", () => {
    "use strict";
    const cards = document.querySelectorAll(".custom-js-style");

    cards.forEach((card) => {
        card.addEventListener('mouseenter', function () {
            card.classList.toggle('custom-action-card');
        });

        card.addEventListener('mouseleave', function () {
            card.classList.toggle('custom-action-card');
        });
    });

})
