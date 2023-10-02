import Typewriter from 'typewriter-effect/dist/core';
import sleep from "./sleep.js"

const splashContainer = document.querySelector('.nv-splash-container');
const splashContent = splashContainer.querySelector('#nv-splash-content');
const splashTitle = splashContainer.querySelector('#nv-splash-title');
const splashText = splashContainer.querySelector('#nv-splash-text');
const splashButtonBlind = splashContainer.querySelector('#nv-splash-button-blind');

const typewriter = new Typewriter(splashText, {
    delay: 30,
    deleteSpeed: 0,
    loop: false
});

const changeSlide = (title) => {
    splashTitle.animate([
        { opacity: 1 },
        { opacity: 0 }
    ], {
        duration: 250,
        fill: 'forwards'
    });
    splashContainer.classList.toggle("bg-magenta");
    setTimeout(() => {
        splashTitle.innerText = title;
        splashTitle.animate([
            { opacity: 0 },
            { opacity: 1 }
        ], {
            duration: 250,
            fill: 'forwards'
        });
    }, 500);
}

typewriter.pauseFor(1500)
    .typeString('Wusstest du, dass die Wahlbeteiligung bei den nationalen Wahlen 2015 in Zürich <b>weniger als 50% betrug?</b>')
    .pauseFor(1000)
    .start()

setTimeout(() => {
    changeSlide("Krass, oder?!");
    typewriter.pauseFor(1500)
        .typeString(' Weniger als die Hälfte der Menschen, die wählen dürfen, gehen effektiv an die Urne. <b>Das heisst von den 1.5 Millionen Menschen im Kanton, haben nur 27% effektiv mitgemacht.</b>')
        .pauseFor(1000)
        .start()

    setTimeout(() => {
        changeSlide("Lass uns das ändern!");
        typewriter.pauseFor(1500)
            .typeString(' Ein Drittel der Bevölkerung geht nicht wählen, obwohl sie könnte. <b>Das müssen wir ändern.</b> Auch du wirst Menschen in deinem Umfeld kennen, die ihr Wahlcouvert ungeöffnet wegschmeissen. Das darf nicht sein. Denn auch wenn es jedes Mal gesagt wird: <b>Diese Wahl ist wahrscheinlich eine der wichtigsten, die wir erleben werden.</b>')
            .pauseFor(1000)
            .start()
        setTimeout(() => {
            changeSlide("Hilfst du mit?");
            setTimeout(() => {
                splashButtonBlind.animate([
                    { opacity: 0, maxHeight: '0px' },
                    { opacity: 1, maxHeight: splashButtonBlind.scrollHeight + 'px' },
                ], {
                    duration: 250,
                    fill: 'forwards'
                });
            }, 1500);
        }, 13000);
    }, 8500);
}, 8000);
