document.addEventListener("DOMContentLoaded", () => {
    //responsive nav
    const navbarWrapper = document.getElementById("navbar-item-wrapper");
    const hamburger = document.getElementById("hamburger");

    hamburger.addEventListener("click", () => {
        navbarWrapper.classList.toggle("h-0");
        navbarWrapper.classList.toggle("h-[280px]");
    });

    document.documentElement.addEventListener("click", (e) => {
        if (!e.target.closest("#hamburger")) {
            navbarWrapper.classList.add("h-0");
            navbarWrapper.classList.remove("h-[280px]");
        }
        //or
        // !e.target.closest('#hamburger')// this will return true or false as per the element is sibling or child of #hamburger
    });

    //popup javascript
    const popupContainer = document.querySelector("#popup-container");
    const popupCloseButton = document.querySelector("#popup-close-button");
    const popup = document.querySelector("#popup");

    if (performance.getEntriesByType("navigation")[0].type === "reload" && window.location.pathname === "/") {
        setTimeout(() => {
            popupContainer.style.display = "block";

            popupContainer.animate([{ opacity: 0 }, { opacity: 1 }], {
                duration: 300,
                easing: "ease-out",
                fill: "forwards",
            });
            popup.animate(
                [
                    { transform: "translateY(-20%)", opacity: 0 },
                    { transform: "translateY(0)", opacity: 1 },
                ],
                {
                    duration: 200,
                    easing: "ease-in",
                    fill: "forwards",
                }
            );
        }, 1500);
    }

    popupCloseButton.addEventListener("click", () => {
        popupContainer.style.display = "none";
    });
});
