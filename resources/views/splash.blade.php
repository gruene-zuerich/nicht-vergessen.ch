<x-app-layout>

    <div class="nv-splash-container bg-gruen items-center">
        <div id="nv-splash-content" class="py-20 md:py-24 px-8 mx-auto text-white">
            <h1 id="nv-splash-title" class="uppercase font-black text-3xl md:text-6xl mb-6">stell dir vor 27% entscheiden was 100% betrifft.</h1>
            <p id="nv-splash-text-1" class="text-2xl md:text-4xl !leading-normal max-h-0 overflow-hidden"></p>
            <div id="nv-splash-media" class="max-w-sm w-full relative mx-auto max-h-0 overflow-hidden my-8">
                <img src="/images/splash/diagramm.svg" alt="40% of residents are not allowed to vote in Zurich, 33% did not vote in 2019, 27% voted.">
            </div>
            <p id="nv-splash-text-2" class="text-2xl md:text-4xl !leading-normal"></p>
            <div id="nv-splash-button-blind" class="max-h-0 overflow-hidden pt-12">
                <a href="/" class="font-black text-2xl md:text-4xl bg-white py-3 px-5 text-magenta uppercase rounded block w-fit ml-auto">Let's go! <span class="emoji">😁</span></a>
            </div>
        </div>
        <div class="nv-splash-blind"></div>
    </div>

    @vite("resources/js/splash.js")
</x-app-layout>
