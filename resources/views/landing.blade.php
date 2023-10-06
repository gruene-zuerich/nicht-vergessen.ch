@php
$messages = array(
    "Hallo 🌿\nDie GRÜNE Zukunft der Schweiz liegt in deinen Händen! Gehe heute wählen und setze ein Zeichen für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat. Deine Stimme zählt! 🗳️",
    "Hey! 🌍\nLass uns gemeinsam die GRÜNE Welle stärken und die SVP stoppen. Jede Stimme für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat ist ein Schritt in die richtige Richtung. Geh wählen! 🗳️💚",
    "Guten Tag!\nWir können es nicht zulassen, dass die Rechtspopulisten die Wahl gewinnen. Hilf uns, die Schweiz GRÜNER zu machen, indem du heute für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat wählst! Deine Stimme ist wichtig! 🗳️🌿",
    "Hey! 🌍\nDie GRÜNE Zukunft hängt von deiner Stimme ab. Gemeinsam können wir die SVP besiegen und Daniel Leupi in den Ständerat wählen, während wir die GRÜNE Liste 3 im Nationalrat unterstützen. Gib deine Stimme ab! 🗳️💪",
    "Hoi! 👋\nNur 27% haben vor 4 Jahren entschieden. Lass uns dieses Mal die Wahlbeteiligung erhöhen und die Schweiz GRÜNER machen. Daniel Leupi und die GRÜNE Liste 3 verdienen deine Stimme! 🗳️🌱",
    "Hey! 🌍\nWir müssen die GRÜNE Bewegung stärken und die SVP besiegen. Daniel Leupi ist unsere Chance. Geh heute wählen und gestalte die Zukunft der Schweiz mit, indem du auch die GRÜNE Liste 3 im Nationalrat unterstützt! 🗳️💚",
    "Guten Tag!\nDie Zukunft der Schweiz liegt in deinen Händen. Gemeinsam können wir die SVP aufhalten und die GRÜNE Vision voranbringen. Deine Stimme für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat zählt! 🗳️🌿",
    "Salut! 💚\nWir können es nicht zulassen, dass die Rechtspopulisten gewinnen. Deine Stimme für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat ist ein Schritt in die richtige Richtung. Geh wählen und verändere die Schweiz! 🗳️💪",
    "Hoi! 👋\nNur 27% haben vor 4 Jahren entschieden. Lass uns dieses Mal die Wahlbeteiligung steigern und die Schweiz GRÜNER machen. Daniel Leupi und die GRÜNE Liste 3 verdienen deine Stimme! 🗳️🌱",
    "Hoi du 💚!\nEs ist an der Zeit, die GRÜNE Bewegung zu unterstützen. Geh heute wählen und setze dich für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat ein. Jede Stimme zählt! 🗳️🌍",
    "Salut! 🌿\nGemeinsam können wir eine nachhaltige Schweiz gestalten. Wähl heute Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat. Deine Stimme ist der Schlüssel zur Veränderung! 🗳️💚",
    "Hallo! 👋\nDie Schweiz braucht GRÜNE Ideen und Lösungen. Unterstütze Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat, um unseren Planeten zu schützen. Geh wählen! 🗳️🌱",
    "Salut! 🗳️\nLass uns die GRÜNE Zukunft gestalten. Deine Stimme für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat ist der Schlüssel zu einer nachhaltigen Schweiz. Wähl heute! 🗳️🌿",
    "Hoi du 💚!\nDie Zeit für Veränderungen ist gekommen. Wähl Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat, um eine GRÜNERE Schweiz aufzubauen. Deine  ist entscheidend! 🗳️💪",
    "Hoi! 👋\nDie Schweiz verdient eine GRÜNE Zukunft. Setze ein starkes Zeichen, indem du heute für Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat wählst. Deine Stimme wird gehört! 🗳️🌱",
    "Hey! 🌍\nGemeinsam können wir die GRÜNE Bewegung vorantreiben. Wähle heute Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat, um die Umwelt und die Zukunft der Schweiz zu schützen. Deine Stimme zählt! 🗳️💚",
    "Guten Tag!\Deine Stimme ist der Motor für Veränderungen. Unterstütze Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat, um eine nachhaltige Schweiz aufzubauen. Geh wählen! 🗳️🌿",
    "Hallo! 🗳️\nDie Schweiz braucht eine GRÜNE Revolution. Schreib Daniel Leupi auf deine Ständeratsliste und wähl die GRÜNEn Liste 3 in den Nationalrat und gestalte eine nachhaltige Zukunft mit. Deine Stimme zählt! 🗳️💪",
    "Hoi! 👋\nDie GRÜNE Bewegung braucht deine Unterstützung. Wähle heute Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat, um eine bessere Schweiz aufzubauen. Deine Stimme ist entscheidend! 🗳️🌱",
    "Salut! 💚 🌿\nEs ist Zeit, GRÜNE Politik zu fördern. Unterstütz Daniel Leupi im Ständerat und die GRÜNE Liste 3 im Nationalrat, um eine nachhaltige Schweiz zu schaffen. Geh wählen! 🗳️🌍"
);
$initialMessage = rand(0, count($messages)-1);

$voicememos = [
    "marionna_schlatter" => "Marionna Schlatter",
    "katharina_prelicz_huber" => "Katharina Prelicz-Huber",
    "anna_beatrice_schmaltz" => "Anna-Béatrice Schmaltz",
    "daniel_leupi" => "Daniel Leupi",
    "balthasar_glaettli" => "Balthasar Glättli",
];
@endphp

<x-app-layout class="main-app-screen">
    <x-screen-layout id="start" class="current-screen action-gruen">
        <div class="nv-action-section-content">
            <h1>Cool,<br>dass du dabei bist!</h1>
            <p>Damit dieses Jahr nicht wieder nur 27% der Bevölkerung entscheiden, wen der Kanton Zürich nach Bern schickt, müssen wir Menschen an die Urnen mobilisieren.</p>
            <p class="!text-lg"> Wenn wir den Rechtsrutsch im Parlament verhindern wollen, dann müssen wir alle unser Umfeld daran erninnern, jetzt GRÜNE Liste 3 zu wählen. <b>So kannst du mitmachen:</b></p>
            <div class="nv-buttongrid mt-8">
                <a href="#" class="nv-option-button animate w-full md:w-fit md:col-span-2" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'voicemessages']);" data-screen="sprachnachrichten">Sprachnachrichten verschicken</a>
                <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'textmessages']);" data-screen="textnachrichten">Nachrichten an Bekannte schreiben</a>
                <a href="https://nuudel.digitalcourage.de/jZ4ANroTfyRaIAVe" target="_blank" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'flyer']);" class="nv-option-button animate w-full md:w-fit">Beim Flyern helfen</a>
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" data-screen="memes">Memes verschicken</a> --}}
                <a href="https://gruene.ch/kampagne/klimawahl2023-material" target="_blank" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'order material']);" class="nv-option-button animate w-full md:w-fit">Material bestellen</a>
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" data-screen="downloadables">Bilder für Social Media herunterladen</a> --}}
                <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'donate']);" data-screen="spenden">Spenden</a>
            </div>
        </div>
    </x-screen-layout>

    <x-screen-layout id="sprachnachrichten" class="action-magenta">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Verschick Sprachmemos!</h1>
        <p>Wir haben die Spitze unserer National- und Ständeratskandidat*innen Sprachmemos aufnehmen lassen.</p>
        <p class="!text-base"> Lade die Nachrichten herunter und verschick sie in deinem Bekanntenkreis weiter!</p>
        <div class="nv-voicememo-grid grid gap-x-10 gap-y-6 grid-cols-1 lg:grid-cols-2 mt-8">
            @foreach ($voicememos as $key => $voicememo)
                <div>
                    <div class="nv-voicememo" data-memo="{{$key}}">
                        <img src="/media/images/memos/{{$key}}.png" alt="" class="h-12 w-12">
                        <div class="nv-voicememo-wave w-3/4 h-8"></div>
                        <div class="nv-voicememo-buttons w-fit whitespace-nowrap flex gap-1">
                            <span class="material-symbols-outlined cursor-pointer !text-2xl p-1 rounded-full bg-magenta text-white w-10 h-10 flex justify-center text-center nv-voicememo-button" data-action="play">play_arrow</span>
                            <span class="material-symbols-outlined cursor-pointer !text-2xl p-1 rounded-full bg-magenta text-white w-10 h-10 flex justify-center text-center nv-voicememo-button" data-action="download">download</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="#" class="nv-action-back w-full justify-end mt-6" data-screen="start">Weiter <span class="material-symbols-outlined">chevron_right</span></a>
    </x-screen-layout>

    <x-screen-layout id="textnachrichten" class="action-gruen">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Erinnere dein Umfeld!</h1>
        <p>Wir haben dir hier ein Beispiel verfasst, welche du an deine Freund*innen schicken kannst.</p>
        <p class="!text-base">Passe die Nachricht an oder lass dir eine neue Vorschlagen!</p>
        <a href="#" class="nv-option-button nv-regenerate-message w-full md:w-fit mt-6" style="--icon: 'refresh'">Neue Nachricht generieren</a>
        <textarea id="examplemessage" class="nv-autosize" data-initial-message="{{$initialMessage}}">{{$messages[$initialMessage]}}</textarea>
        <div class="nv-buttongrid mt-4">
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" onclick="_paq.push(['trackEvent', 'Support', 'textmessage', 'telegram']);" data-share="telegram">Auf Telegram teilen</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" onclick="_paq.push(['trackEvent', 'Support', 'textmessage', 'whatsapp']);" data-share="whatsapp">Auf Whatsapp teilen</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" onclick="_paq.push(['trackEvent', 'Support', 'textmessage', 'twitter']);" data-share="twitter">Auf Twitter teilen</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" onclick="_paq.push(['trackEvent', 'Support', 'textmessage', 'email']);" data-share="email">Per E-Mail teilen</a>
            <a href="#" class="nv-option-button nv-share-button md:col-span-2" style="--icon: 'content_copy'" onclick="_paq.push(['trackEvent', 'Support', 'textmessage', 'copy']);" data-share="copy">In Zwischenablage kopieren</a>
        </div>
        <script type="text/json" id="messages-json">
            {!! json_encode($messages) !!}
        </script>
        <a href="#" class="nv-action-back w-full justify-end mt-6" data-screen="start">Weiter <span class="material-symbols-outlined">chevron_right</span></a>
    </x-screen-layout>

    <x-screen-layout id="spenden" class="action-magenta">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Unterstütze uns mit einer Spende!</h1>
        <p>Wahlkämpfe kosten Geld, das ist dir bestimmt nichts Neues. Wir haben aber, im Gegensatz zu unseren politischen Gegner*innen, keine Grosskonzerne und Reiche, die uns ihr Geld im Gegenzu zu politischem Einfluss abtreten. Wir haben Menschen wie dich!</p>
        <p class="!text-base">Danke, dass du unseren Wahlkampf mit einer Spende unterstützt!</p>
        <div class="rnw-widget-container mt-12 max-w-[790px]"></div>
        <script src="https://tamaro.raisenow.com/grnes-c83e/latest/widget.js"></script>
        <script>
            window.rnw.tamaro.runWidget('.rnw-widget-container', {
                language: 'de',
                paymentWidgetBlocks: [ //Schritt 1
                    "payment_purposes",
                    "payment_amounts_and_intervals",
                    "payment_payment_methods",
                    "payment_profile",
                    "payment_address",
                    "payment_cover_fee"
                ],
                showStoredCustomerStreetNumber: false,
                showStoredCustomerStreet2: false,
                showStoredCustomerMessage: false,
                paymentFormPrefill: {
                    stored_customer_donation_receipt: true,
                    stored_cover_transaction_fee: true,
                    stored_customer_country : "CH",
                },
                purposes: ["p1","p2"],
                purposeDetails: {
                    p1: {
                        stored_campaign_id: "nicht-vergessen.ch",
                    }
                },
                translations: { //Schritt 3
                    de: {
                        purposes: {
                            p1: 'Eidgenössische Wahlen 2023 : GRÜNE Zürich',
                            p2: 'Eidgenössische Wahlen 2023 : GRÜNE Zürich',
                        },
                    },
                },
            }).then(function(api){
                window.api = api;
            })
        </script>
        <style>
            :root {
                --tamaro-primary-color: #EC008C;
                --tamaro-primary-color__hover: #d378af;
                --tamaro-primary-bg-color: white;
                --tamaro-border-color: #84B414;
                --tamaro-bg-color: white;
            }
        </style>
        <a href="#" class="nv-action-back w-full justify-end mt-6" data-screen="start">Weiter <span class="material-symbols-outlined">chevron_right</span></a>
    </x-screen-layout>
</x-app-layout>
