const open = document.getElementById("open");
const close = document.getElementById("close");
const menu = document.querySelector(".menu");

let viewportMetaTag = document.querySelector("meta[name=viewport]");

if (!viewportMetaTag) {
    viewportMetaTag = document.createElement('meta');
    viewportMetaTag.name = "viewport";
    document.head.appendChild(viewportMetaTag);
}

open.addEventListener("click", () => {
    menu.classList.add("show-nav");
    window.scrollTo(0, 0); 
    document.body.style.overflow = 'hidden';
    viewportMetaTag.setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
    document.body.style.position = 'fixed';
    document.body.style.width = '100%';
});

close.addEventListener("click", () => {
    menu.classList.remove("show-nav");
    document.body.style.overflow = ''; 
    viewportMetaTag.setAttribute("content", "width=device-width, initial-scale=1.0");
    document.body.style.position = '';
    document.body.style.width = '';
});
