let history = [];

window.addEventListener("click", function (e) {
    let actionAnchor = e.target.closest("a")
    if (!actionAnchor || !actionAnchor.dataset.screen) return
    e.preventDefault()
    let currentScreen = document.querySelector(".nv-action-screen.current-screen")
    let screenId = actionAnchor.dataset.screen
    let multiply = 1;
    if (screenId == "reverse") {
        screenId = history.pop().id
        multiply = -1
    }
    let screen = document.querySelector(`.nv-action-screen#${screenId}`)
    if (!screen) return
    screen.animate([
        { transform: `translateX(${100 * multiply}vw)` },
        { transform: "translateX(0)" }
    ], {
        duration: 200,
        easing: "ease-out",
        fill: "forwards"
    })
    currentScreen.animate([
        { transform: "translateX(0)" },
        { transform: `translateX(${100 * multiply * -1}vw)` },
    ], {
        duration: 200,
        easing: "ease-out",
        fill: "forwards"
    })
    history.push(currentScreen)
    screen.classList.add("current-screen")
    currentScreen.classList.remove("current-screen")
})


// Textmessages

if (document.querySelector(".nv-regenerate-message")) {
    let button = document.querySelector(".nv-regenerate-message")
    let textarea = document.querySelector("#examplemessage")
    let currentMessage = textarea.dataset.initialMessage;
    button.addEventListener("click", function (e) {
        e.preventDefault()
        let messages = JSON.parse(document.querySelector("#messages-json").innerHTML)
        currentMessage++
        if (currentMessage >= messages.length) currentMessage = 0
        textarea.value = messages[currentMessage]
        window.autoSize(textarea)
    })

    let shareButtons = document.querySelectorAll(".nv-share-button")
    shareButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            let type = button.dataset.share
            let message = encodeURIComponent(textarea.value)
            let linebreak = encodeURIComponent("\n")
            let url = encodeURIComponent(window.location.href)

            switch (type) {
                case "telegram":
                    window.open(`https://t.me/share/url?url=${url}&text=${message}`, "_blank")
                    break
                case "whatsapp":
                    window.open(`https://api.whatsapp.com/send?text=${message + linebreak + url}`, "_blank")
                    break
                case "email":
                    window.open(`mailto:?subject=${message}&body=${url}`, "_blank")
                    break
                case "twitter":
                    window.open(`https://twitter.com/intent/tweet?text=${message}&url=${url}`, "_blank")
                    break
                case "copy":
                    navigator.clipboard.writeText(message)
                    break
            }
        })
    })
}
