import "./bootstrap";
import "preline";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    const activeClasses = ["border-gray-800", "font-medium", "text-gray-800"];
    const inactiveClasses = ["border-transparent", "text-gray-500"];

    const navLinks = document.querySelectorAll(
        '#hs-navbar-header-floating a[href^="#"]'
    );

    const updateActiveLink = (targetId) => {
        navLinks.forEach((link) => {
            link.classList.remove(...activeClasses);
            link.classList.add(...inactiveClasses);

            if (link.getAttribute("href") === `#${targetId}`) {
                link.classList.add(...activeClasses);
                link.classList.remove(...inactiveClasses);
            }
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    updateActiveLink(entry.target.getAttribute("id"));
                }
            });
        },
        {
            rootMargin: "-40% 0px -60% 0px",
            threshold: 0,
        }
    );

    navLinks.forEach((link) => {
        const sectionId = link.getAttribute("href");
        if (sectionId && sectionId.startsWith("#")) {
            const section = document.querySelector(sectionId);
            if (section) {
                observer.observe(section);
            }
        }
    });
});
