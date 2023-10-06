import { Notyf } from 'notyf';
import 'notyf/notyf.min.css';
let history = [];
const notyf = new Notyf();
import WaveSurfer from 'wavesurfer.js'


const setScreen = (screenId) => {
    let currentScreen = document.querySelector(".nv-action-screen.current-screen")
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
    window.history.pushState({ screen: screenId }, "", (screenId == "start") ? "/" : screenId);
    screen.classList.add("current-screen")
    currentScreen.classList.remove("current-screen")
}

window.addEventListener("click", function (e) {
    let actionAnchor = e.target.closest("a")
    if (!actionAnchor || !actionAnchor.dataset.screen) return
    e.preventDefault()
    let screenId = actionAnchor.dataset.screen
    setScreen(screenId)
})

window.addEventListener("load", function () {
    let path = window.location.pathname
    if (path == "/" || path == "") return
    setScreen(path.replace("/", ""))
});


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
                    window.open(`https://twitter.com/intent/tweet?text=${message + encodeURIComponent("\n#WirUndJetzt #Klimawahl23")}&url=${url}`, "_blank")
                    break
                case "copy":
                    navigator.clipboard.writeText(decodeURIComponent(message) + "\n" + decodeURIComponent(url))
                    notyf.success("Text in die Zwischenablage kopiert! :)")
                    break
            }
        })
    })
}


// Voicemessages

window.addEventListener("load", function () {
    let wavesurfers = {}
    let waveElements = document.querySelectorAll(".nv-voicememo-wave")
    waveElements.forEach((waveElement) => {
        let memo = waveElement.closest(".nv-voicememo").dataset.memo
        let wavesurfer = WaveSurfer.create({
            container: waveElement,
            waveColor: '#84B414',
            progressColor: '#E10078',
            url: `/media/audio/memos/${memo}.mp3`,
            height: 40,
        });
        wavesurfers[memo] = wavesurfer;
        console.log(wavesurfers)
    })

    if (document.querySelector(".nv-voicememo-button")) {
        let buttons = document.querySelectorAll(".nv-voicememo-button")
        buttons.forEach((button) => {
            button.addEventListener("click", function (e) {
                e.preventDefault()
                let memo = button.closest(".nv-voicememo").dataset.memo
                if (button.dataset.action == "play") {
                    let wavesurfer = wavesurfers[memo]
                    wavesurfer.playPause()
                    button.classList.toggle("playing")
                    if (button.classList.contains("playing")) {
                        wavesurfer.on("finish", function () {
                            button.classList.remove("playing")
                            button.innerHTML = "play_arrow"
                            window._paq.push(['trackEvent', 'Voicememo', 'play', memo]);
                        })
                        button.innerHTML = "pause_circle"
                    } else {
                        button.innerHTML = "play_arrow"
                        window._paq.push(['trackEvent', 'Voicememo', 'play', memo]);
                    }
                } else if (button.dataset.action == "download") {
                    let a = document.createElement("a")
                    a.href = `/media/audio/memos/${memo}.mp3`
                    a.download = `${memo}.mp3`
                    a.click()
                    a.remove()
                    window._paq.push(['trackEvent', 'Voicememo', 'download', memo]);
                }
            })
        })
    }
});

