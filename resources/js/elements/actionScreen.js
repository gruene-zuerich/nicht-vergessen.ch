import WaveSurfer from 'wavesurfer.js'

if (!window._paq) window._paq = [];

// Voicemessages

window.addEventListener("load", function () {
    let wavesurfers = {}
    let waveElements = document.querySelectorAll(".nv-voicememo-wave")
    waveElements.forEach((waveElement) => {
        let memo = waveElement.closest(".nv-voicememo").dataset.memo
        let wavesurfer = WaveSurfer.create({
            container: waveElement,
            waveColor: 'white',
            progressColor: '#FAD6D6',
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
                        })
                        button.innerHTML = "pause_circle"
                        window._paq.push(['trackEvent', 'Voicememo', 'play', memo]);
                    } else {
                        button.innerHTML = "play_arrow"
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
