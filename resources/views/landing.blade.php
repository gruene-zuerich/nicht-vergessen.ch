@php

$voicememos = [
    "bettina_looser" => "Wahlaufruf von Bettina Looser",
    "fiona_zolg" => "Wahlaufruf von Fiona Zolg",
    "peter_neukomm" => "Wahlaufruf von Stadtpräsident Peter Neukomm",
    "christine_thommen" => "Wahlaufruf von Stadträtin Christine Thommen",
];
@endphp

<x-app-layout class="main-app-screen">
    <div class="min-h-screen flex justify-center items-center">
        <div class="voicememos-container px-4 md:px-8 py-6 md:py-12 w-full">
            <div class="voicememos-heroine max-w-4xl mx-auto">
                <x-heroine />
            </div>
            <div class="voicememos-container max-w-3xl mx-auto mt-6 md:mt-12 text-lg md:text-2xl">
                <p><b>Am 18. August wählen wir den Regierungsrat.</b> Hast du dein Stimmcouvert schon abgegeben? Und dein Umfeld? Erinnere deine Freund*innen an die Wahlen, <b>indem du ihnen Sprachnachrichten von unseren Kandidat*innen und Amtsträger*innen schickst!</b></p>
                <div class="voicememos-list mt-8 grid grid-cols-1 gap-4">
                @foreach ($voicememos as $key => $voicememo)
                    <div>
                        <div class="nv-voicememo bg-sprot rounded-md p-4" data-memo="{{$key}}">
                            <p class="font-bold italic md:text-xl text-white mb-4 leading-none">{{$voicememo}}</p>
                            <div class="flex justify-between items-center gap-x-4">
                                <img src="/media/images/memos/{{$key}}.png" alt="" class="h-12 w-12">
                                <div class="nv-voicememo-wave w-3/4 h-8"></div>
                                <div class="nv-voicememo-buttons w-fit whitespace-nowrap flex gap-1 items-center">
                                    <span class="material-symbols-outlined cursor-pointer !text-2xl p-1 rounded-full bg-white text-sprot w-10 h-10 flex justify-center text-center nv-voicememo-button" data-action="play">play_arrow</span>
                                    <span class="material-symbols-outlined cursor-pointer !text-2xl p-1 rounded-full bg-white text-sprot w-10 h-10 flex justify-center text-center nv-voicememo-button" data-action="download">download</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
