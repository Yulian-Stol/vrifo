export const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
    const button = document.querySelector(hamburgerButton),
        nav = document.querySelector(hamburgerNav),
        header = document.querySelector(hamburgerHeader);

    button.addEventListener("click", (e) => {
        button.classList.toggle("hamburger--active");
        nav.classList.toggle("header__nav--active");
        header.classList.toggle("header--menu");
    });
};
