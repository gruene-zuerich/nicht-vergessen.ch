window.addEventListener("click", function (e) {
    let label = e.target.closest(".nv-checkbox-label");
    if (label) {
        let symbols = label.querySelectorAll(".material-symbols-outlined.checking");
        symbols.forEach(function (symbol) {
            symbol.classList.toggle("!hidden");
        });
    }
});
