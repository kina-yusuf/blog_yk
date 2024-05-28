const open = document.getElementById("open");
const close = document.getElementById("close");
const menu = document.querySelector(".menu");
const viewportMetaTag = document.querySelector("meta[name=viewport]");

open.addEventListener("click", () => {
    menu.classList.add("show-nav");
    window.scrollTo(0, 0); 
    document.body.style.overflow = 'hidden';
    if (viewportMetaTag) {
        viewportMetaTag.setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
    }
});

close.addEventListener("click", () => {
    menu.classList.remove("show-nav");
    document.body.style.overflow = '';
    if (viewportMetaTag) {
        viewportMetaTag.setAttribute("content", "width=device-width, initial-scale=1.0");
    }
});
