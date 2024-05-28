const open = document.getElementById("open");
const close = document.getElementById("close");
const menu = document.querySelector(".menu");

open.addEventListener("click", () => {
    menu.classList.add("show-nav");
    window.scrollTo(0, 0); // Scroll to the top
    document.body.style.overflow = 'hidden'; // Hide overflow
});

close.addEventListener("click", () => {
    menu.classList.remove("show-nav");
    document.body.style.overflow = ''; // Revert overflow
});
