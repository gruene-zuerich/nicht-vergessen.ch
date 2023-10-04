const styleSets = () => {
    document.documentElement.style.setProperty("--vh", `${window.innerHeight * 0.01}px`);
}

const autoSize = (textarea) => {
    textarea.style.height = "auto";
    textarea.style.height = `${textarea.scrollHeight}px`;
}

document.querySelectorAll("textarea.nv-autosize").forEach((textarea) => {
    textarea.addEventListener("input", () => autoSize(textarea));
    window.addEventListener("load", () => autoSize(textarea));
    window.addEventListener("resize", () => autoSize(textarea));
});

window.addEventListener("resize", styleSets);
window.addEventListener("load", styleSets);

window.autoSize = autoSize;
