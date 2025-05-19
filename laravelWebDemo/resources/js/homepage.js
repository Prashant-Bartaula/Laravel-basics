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
    // const popupContainer = document.querySelector("#popup-container");
    // const popupCloseButton = document.querySelector("#popup-close-button");
    // const popup = document.querySelector("#popup");

    // if (performance.getEntriesByType("navigation")[0].type === "reload" && window.location.pathname === "/") {
    //     setTimeout(() => {
    //         popupContainer.style.display = "block";

    //         // popupContainer.animate([{ opacity: 0 }, { opacity: 1 }], {
    //         //     duration: 300,
    //         //     easing: "ease-out",
    //         //     fill: "forwards",
    //         // });
    //         popup.animate(
    //             [
    //                 { transform: "translateY(-20%)", opacity: 0 },
    //                 { transform: "translateY(0)", opacity: 1 },
    //             ],
    //             {
    //                 duration: 200,
    //                 easing: "ease-in",
    //                 fill: "forwards",
    //             }
    //         );
    //     }, 1000);
    // }

    // popupCloseButton.addEventListener("click", () => {
    //     popupContainer.style.display = "none";
    // });


    
    //displaying notices sent from home controller
    const noticesLinks = document.querySelectorAll("#notice-link-items li");
    const notices = document.getElementById("notices");
    const viewAllNotice = document.getElementById("view-all-notice");
    let activeNoticeLink = document.querySelector(
        "#notice-link-items li.current"
    );

    //to run default for active link
    window.noticeData.forEach((notice) => {
        if (notice.type === activeNoticeLink.id) {
            const div = document.createElement("div");
            div.classList.add("px-3", "flex", "flex-col", "gap-2");
            div.innerHTML = `
                        <h1 class="font-semibold text-xl text-blue-300"><a href='#'>${notice.title}</a></h1>
                        <p class="text-xs">${notice.released_date}</p>
                    `;
            notices.appendChild(div);
            viewAllNotice.innerHTML = `<a href='#'>view all ${notice.type}s</a>`;
        }
    });

    //to handle click event on titles
    noticesLinks.forEach((link) => {
        link.addEventListener("click", () => {
            notices.innerHTML = "";
            noticesLinks.forEach((l) => l.classList.remove("current"));
            link.classList.add("current");
            let activeNoticeLink = document.querySelector(
                "#notice-link-items li.current"
            );

            window.noticeData.forEach((notice) => {
                if (notice.type === activeNoticeLink.id) {
                    const div = document.createElement("div");
                    div.classList.add("px-3", "flex", "flex-col", "gap-2");
                    div.innerHTML = `
                        <h1 class="font-semibold text-xl text-blue-300"><a href='#'>${notice.title}</a></h1>
                        <p class="text-xs">${notice.released_date}</p>
                    `;
                    notices.appendChild(div);
            viewAllNotice.innerHTML = `<a href='#'>view all ${notice.type}</a>`;
                }
            });
        });
    });



    //shots in nepal aniamtion js
    function animation(){
        const scrollerInner=document.querySelector(".scroller_inner");
        const scrollItem=Array.from(scrollerInner.children);

        scrollItem.forEach(item=>{
            const clonedNode=item.cloneNode(true);
            scrollerInner.appendChild(clonedNode);
        })
    }
    animation();
});
