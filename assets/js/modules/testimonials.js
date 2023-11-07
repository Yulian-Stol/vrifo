export function animateSlider(selector, useNegativeMargin = false) {
    const parentSelector = document.querySelector(selector);
    const clone = parentSelector.innerHTML;
    const firstElement = parentSelector.children[0];
    const initialPosition = useNegativeMargin ? -firstElement.clientWidth : 0;
    const speed = 1;
    let position = initialPosition;
    let animationId = null;

    parentSelector.insertAdjacentHTML("beforeend", clone);

    function animate() {
        position += speed;

        if (useNegativeMargin) {
            if (position > 0) {
                position = initialPosition;
            }
            firstElement.style.marginLeft = `${position}px`;
        } else {
            if (position > firstElement.clientWidth) {
                position = 0;
            }
            firstElement.style.marginLeft = `-${position}px`;
        }

        animationId = requestAnimationFrame(animate);
    }

    // Mouse events to stop/start animation on hover
    parentSelector.addEventListener("mouseenter", () => {
        if (animationId) {
            cancelAnimationFrame(animationId);
            animationId = null;
        }
    });

    parentSelector.addEventListener("mouseleave", () => {
        if (!animationId) {
            animate();
        }
    });

    // Mousemove event to stop animation during mouse twitching
    parentSelector.addEventListener("mousemove", () => {
        if (animationId) {
            cancelAnimationFrame(animationId);
            animationId = null;
        }
    });

    // Scroll event listener for starting animation only when the cursor is over the block
    let isMouseOver = false;

    parentSelector.addEventListener("mouseenter", () => {
        isMouseOver = true;
        window.addEventListener("scroll", scrollHandler);
    });

    parentSelector.addEventListener("mouseleave", () => {
        isMouseOver = false;
        window.removeEventListener("scroll", scrollHandler);
    });

    function scrollHandler() {
        if (isMouseOver && !animationId) {
            animate();
        }
    }

    animate();
}
