<x-app-layout>

    <div class="nv-splash-container bg-gruen items-center">
        <div id="nv-splash-content" class="py-20 md:py-24 px-8 mx-auto text-white">
            <h1 id="nv-splash-title" class="uppercase font-black text-7xl md:text-9xl my-8">Hey!</h1>
            <div id="nv-splash-text-container" class="flex items-end">
                <p id="nv-splash-text" class="text-2xl md:text-4xl !leading-normal"></p>
            </div>
            <div id="nv-splash-button-blind" class="max-h-0 overflow-hidden">
                <a href="/" class="font-black text-2xl md:text-4xl bg-white py-3 px-5 text-magenta uppercase rounded block w-fit ml-auto mt-4">Ja, sowieso! <span class="emoji">😁</span></a>
            </div>
        </div>
        <div class="nv-splash-blind"></div>
    </div>

    @vite("resources/js/splash.js")
</x-app-layout>
