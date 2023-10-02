const styleSets = () => {
    document.documentElement.style.setProperty("--vh", `${window.innerHeight * 0.01}px`);
}

window.addEventListener("resize", styleSets);
window.addEventListener("load", styleSets);
