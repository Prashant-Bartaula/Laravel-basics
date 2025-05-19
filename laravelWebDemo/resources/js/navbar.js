document.addEventListener('DOMContentLoaded', ()=>{
    const navbarWrapper = document.getElementById("navbar-item-wrapper");
    const hamburger = document.getElementById("hamburger");

    hamburger.addEventListener("click", () => {
        navbarWrapper.classList.toggle("h-0");
        navbarWrapper.classList.toggle("h-[280px]");
    });

    document.documentElement.addEventListener("click", (e) =>{
        if (!e.target.closest("#hamburger")) {
            navbarWrapper.classList.add("h-0");
            navbarWrapper.classList.remove("h-[280px]");
        }
        //or
        // !e.target.closest('#hamburger')// this will return true or false as per the element is sibling or child of #hamburger
    });
})