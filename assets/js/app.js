import {hamburger} from "./modules/header.js";
import {initAccordions} from "./modules/faq.js";
import {animateSlider} from "./modules/testimonials.js";

document.addEventListener("DOMContentLoaded", function () {
    hamburger(".hamburger", ".header__nav", ".header");
    animateSlider(".testimonials__slider--top");
    animateSlider(".testimonials__slider--bottom", true);
    initAccordions();
});
