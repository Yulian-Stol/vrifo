export const initAccordions = () => {
    const accordion = document.querySelectorAll(".faq__accordion");

    if (accordion.length == 0) {
        return;
    }

    accordion.forEach((item) => {
        const accordionClick = item.querySelector(".js-faq-header"),
            accordionContent = item.querySelector(".js-faq-content");

        accordionClick.addEventListener("click", (e) => {
            if (!item.classList.contains("active")) {
                item.classList.add("active");
                accordionContent.style.height = "auto";
                var height = accordionContent.clientHeight + "px";
                accordionContent.style.height = "0px";

                setTimeout(() => {
                    accordionContent.style.height = height;
                }, 0);
            } else {
                accordionContent.style.height = "0px";
                item.classList.remove("active");
            }
        });
    });
};
