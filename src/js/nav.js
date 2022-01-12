var navblock = document.getElementById("nav-block");
var btnNav = document.getElementById("btnNav");
function swapNav(){
    if (!navblock.classList.contains("z-40")){
        navblock.classList.add("z-40", "opacity-100","pointer-event-normal", "-translate-y-[0vh]");
        navblock.classList.remove("-z-10", "opacity-0", "pointer-event-auto", "-translate-y-[100vh]");
    } else {
        navblock.classList.remove("z-40","opacity-100", "pointer-event-normal", "-translate-y-[0vh]");
        navblock.classList.add("-z-10","opacity-0", "pointer-event-auto", "-translate-y-[100vh]");
    }
}
