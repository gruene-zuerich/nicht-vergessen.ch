import Typewriter from 'typewriter-effect/dist/core';

const splashContainer = document.querySelector('.nv-splash-container');
const splashContent = splashContainer.querySelector('#nv-splash-content');
const splashTitle = splashContainer.querySelector('#nv-splash-title');
const splashText = splashContainer.querySelector('#nv-splash-text-1');
const splashText2 = splashContainer.querySelector('#nv-splash-text-2');
const splashMedia = splashContainer.querySelector('#nv-splash-media');
const splashButtonBlind = splashContainer.querySelector('#nv-splash-button-blind');

let typewriter = new Typewriter(splashText, {
    delay: 30,
    deleteSpeed: 0,
    loop: false
});

const changeSlide = () => {
    splashContainer.classList.toggle("bg-magenta");
}

setTimeout(() => {
    splashText.animate([
        { opacity: 0, maxHeight: '0px' },
        { opacity: 1, maxHeight: splashText.scrollHeight + 'px', offset: 0.999 },
        { opacity: 1, maxHeight: "unset" }
    ], {
        duration: 250,
        fill: 'forwards'
    });

    typewriter.pauseFor(1000)
        .typeString('27% der Zürcher*innen haben 2019 gewählt.')
        .start()

    changeSlide();
    setTimeout(() => {
        splashMedia.animate([
            { opacity: 0, maxHeight: '0px' },
            { opacity: 1, maxHeight: splashMedia.scrollHeight + 'px', offset: 0.999 },
            { opacity: 1, maxHeight: "unset" }
        ], {
            duration: 250,
            fill: 'forwards'
        });

        setTimeout(() => {
            typewriter = new Typewriter(splashText2, {
                delay: 30,
                deleteSpeed: 0,
                loop: false
            });
            splashText2.scrollIntoView({ behavior: 'smooth' });
            setInterval(() => {
                splashText2.scrollIntoView({ behavior: 'smooth' });
            }, 500);
            typewriter.typeString("<b>Warst du eine von ihnen?</b>")
                .pauseFor(1000)
                .typeString("<br>Lass uns dafür sorgen, dass diese Zahlen 2023 anders aussehen und erinnere deine Freund*innen ans Wählen:")
                .start();

            setTimeout(() => {
                splashButtonBlind.animate([
                    { opacity: 0, maxHeight: '0px' },
                    { opacity: 1, maxHeight: splashButtonBlind.scrollHeight + 'px' },
                ], {
                    duration: 250,
                    fill: 'forwards'
                });
            }, 6500);
        }, 2000);
    }, 3000);
}, 1250);

