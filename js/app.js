const open = document.getElementById("open");
const close = document.getElementById("close");
const menu = document.querySelector(".menu");
const viewportMetaTag = document.querySelector("meta[name=viewport]") || document.createElement('meta');

if (!viewportMetaTag.parentNode) {
    viewportMetaTag.name = "viewport";
    document.head.appendChild(viewportMetaTag);
}

open.addEventListener("click", () => {
    menu.classList.add("show-nav");
    window.scrollTo(0, 0); 
    document.body.style.overflow = 'hidden'; 
    viewportMetaTag.setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
});

close.addEventListener("click", () => {
    menu.classList.remove("show-nav");
    document.body.style.overflow = ''; 
    viewportMetaTag.setAttribute("content", "width=device-width, initial-scale=1.0");
});
