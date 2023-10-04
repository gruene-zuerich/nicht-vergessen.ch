@php
$messages = array(
    "Hallo 🌿\nDie grüne Zukunft der Schweiz liegt in deinen Händen! Gehe heute wählen und setze ein Zeichen für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat. Deine Stimme zählt! 🗳️ #Wahlen2023",
    "Hey! 🌍\nLass uns gemeinsam die grüne Welle stärken und die SVP stoppen. Jede Stimme für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat ist ein Schritt in die richtige Richtung. Geh wählen! 🗳️💚 #WahlenCH",
    "Guten Tag!\nWir können es nicht zulassen, dass die Rechtspopulisten die Wahl gewinnen. Hilf uns, die Schweiz grüner zu machen, indem du heute für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat wählst! Deine Stimme ist wichtig! 🗳️🌿 #WahlenSchweiz",
    "Hey! 🌍\nDie grüne Zukunft hängt von deiner Stimme ab. Gemeinsam können wir die SVP besiegen und Daniel Leupi in den Ständerat wählen, während wir die grüne Liste 3 im Nationalrat unterstützen. Gib deine Stimme ab! 🗳️💪 #WählenFürDieZukunft",
    "Hoi! 👋\nNur 27% haben vor 4 Jahren entschieden. Lass uns dieses Mal die Wahlbeteiligung erhöhen und die Schweiz grüner machen. Daniel Leupi und die grüne Liste 3 verdienen deine Stimme! 🗳️🌱 #Wahlen22Oktober",
    "Hey! 🌍\nWir müssen die grüne Bewegung stärken und die SVP besiegen. Daniel Leupi ist unsere Chance. Geh heute wählen und gestalte die Zukunft der Schweiz mit, indem du auch die grüne Liste 3 im Nationalrat unterstützt! 🗳️💚 #WahlenCH",
    "Guten Tag!\nDie Zukunft der Schweiz liegt in deinen Händen. Gemeinsam können wir die SVP aufhalten und die grüne Vision voranbringen. Deine Stimme für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat zählt! 🗳️🌿 #WahlenSchweiz",
    "Salut! 💚\nWir können es nicht zulassen, dass die Rechtspopulisten gewinnen. Deine Stimme für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat ist ein Schritt in die richtige Richtung. Geh wählen und verändere die Schweiz! 🗳️💪 #WählenFürDieZukunft",
    "Hoi! 👋\nNur 27% haben vor 4 Jahren entschieden. Lass uns dieses Mal die Wahlbeteiligung steigern und die Schweiz grüner machen. Daniel Leupi und die grüne Liste 3 verdienen deine Stimme! 🗳️🌱 #Wahlen22Oktober",
    "Hoi du 💚!\nEs ist an der Zeit, die grüne Bewegung zu unterstützen. Geh heute wählen und setze dich für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat ein. Jede Stimme zählt! 🗳️🌍 #WahlenSchweiz",
    "Salut! 🌿\nGemeinsam können wir eine nachhaltige Schweiz gestalten. Wähl heute Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat. Deine Stimme ist der Schlüssel zur Veränderung! 🗳️💚 #Wahlen2023",
    "Hallo! 👋\nDie Schweiz braucht grüne Ideen und Lösungen. Unterstütze Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat, um unseren Planeten zu schützen. Geh wählen! 🗳️🌱 #WahlenCH",
    "Salut! 🗳️\nLass uns die grüne Zukunft gestalten. Deine Stimme für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat ist der Schlüssel zu einer nachhaltigen Schweiz. Wähl heute! 🗳️🌿 #WahlenSchweiz",
    "Hoi du 💚!\nDie Zeit für Veränderungen ist gekommen. Wähl Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat, um eine grünere Schweiz aufzubauen. Deine  ist entscheidend! 🗳️💪 #WählenFürDieZukunft",
    "Hoi! 👋\nDie Schweiz verdient eine grüne Zukunft. Setze ein starkes Zeichen, indem du heute für Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat wählst. Deine Stimme wird gehört! 🗳️🌱 #Wahlen22Oktober",
    "Hey! 🌍\nGemeinsam können wir die grüne Bewegung vorantreiben. Wähle heute Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat, um die Umwelt und die Zukunft der Schweiz zu schützen. Deine Stimme zählt! 🗳️💚 #WahlenCH",
    "Guten Tag!\Deine Stimme ist der Motor für Veränderungen. Unterstütze Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat, um eine nachhaltige Schweiz aufzubauen. Geh wählen! 🗳️🌿 #WahlenSchweiz",
    "Hallo! 🗳️\nDie Schweiz braucht eine grüne Revolution. Schreib Daniel Leupi auf deine Ständeratsliste und wähl die grünen Liste 3 in den Nationalrat und gestalte eine nachhaltige Zukunft mit. Deine Stimme zählt! 🗳️💪 #WählenFürDieZukunft",
    "Hoi! 👋\nDie grüne Bewegung braucht deine Unterstützung. Wähle heute Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat, um eine bessere Schweiz aufzubauen. Deine Stimme ist entscheidend! 🗳️🌱 #Wahlen22Oktober",
    "Salut! 💚 🌿\nEs ist Zeit, grüne Politik zu fördern. Unterstütz Daniel Leupi im Ständerat und die grüne Liste 3 im Nationalrat, um eine nachhaltige Schweiz zu schaffen. Geh wählen! 🗳️🌍 #WahlenSchweiz"
);
$initialMessage = rand(0, count($messages)-1);

@endphp

<x-app-layout class="main-app-screen">
    <x-screen-layout id="start" class="current-screen">
        <div class="nv-action-section-content">
            <h1>Danke, dass du mithilfst!</h1>
            <p>Damit dieses Jahr nicht wieder nur 27% der Bevölkerung entscheiden, wen der Kanton Zürich nach Bern schickt, müssen wir Menschen an die Urnen mobilisieren. <b>Dabei kannst du uns unterstützen.</b></p>
            <p class="!text-lg">Wähle hier aus, wie du uns beim Mobilisieren unserer Wähler*innen helfen möchtest:</p>
            <div class="nv-buttongrid mt-8">
                <a href="#" class="nv-option-button animate w-full md:w-fit col-span-full" data-screen="textmessages">Nachrichten an Bekannte schreiben</a>
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" data-screen="voicememos">Sprachnachrichten verschicken</a> --}}
                <a href="https://nuudel.digitalcourage.de/jZ4ANroTfyRaIAVe" target="_blank" class="nv-option-button animate w-full md:w-fit">Beim flyern helfen</a>
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" data-screen="memes">Memes verschicken</a> --}}
                <a href="https://gruene.ch/kampagne/klimawahl2023-material" target="_blank" class="nv-option-button animate w-full md:w-fit">Material bestellen</a>
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" data-screen="downloadables">Bilder für Social Media herunterladen</a> --}}
                <a href="#" class="nv-option-button animate w-full md:w-fit" data-screen="donate">Spenden</a>
            </div>
        </div>
    </x-screen-layout>

    <x-screen-layout id="textmessages" class="action-gruen">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Erinnere dein Umfeld!</h1>
        <p>Wir haben dir hier ein Beispiel verfasst, welche du an deine Freund*innen schicken kannst.</p>
        <p class="!text-base">Passe die Nachricht an oder lass dir eine neue Vorschlagen!</p>
        <a href="#" class="nv-option-button nv-regenerate-message w-full md:w-fit mt-6" style="--icon: 'refresh'">Neue Nachricht generieren</a>
        <textarea id="examplemessage" class="nv-autosize" data-initial-message="{{$initialMessage}}">{{$messages[$initialMessage]}}</textarea>
        <div class="nv-buttongrid mt-4">
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" data-share="telegram">Auf Telegram teilen</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" data-share="whatsapp">Auf Whatsapp teilen</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" data-share="twitter">Auf Twitter teilen</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: 'send'" data-share="email">Per E-Mail teilen</a>
            <a href="#" class="nv-option-button nv-share-button md:col-span-2" style="--icon: 'content_copy'" data-share="copy">In Zwischenablage kopieren</a>
        </div>
        <script type="text/json" id="messages-json">
            {!! json_encode($messages) !!}
        </script>
        <a href="#" class="nv-action-back w-full justify-end mt-6" data-screen="start">Weiter <span class="material-symbols-outlined">chevron_right</span></a>
    </x-screen-layout>

    <x-screen-layout id="donate" class="action-magenta">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Unterstütze uns mit einer Spende!</h1>
        <p>Wahlkämpfe kosten Geld, das ist dir bestimmt nichts Neues. Wir haben aber, im Gegensatz zu unseren politischen Gegner*innen, keine Grosskonzerne und Reiche, die uns ihr Geld im Gegenzu zu politischem Einfluss abtreten. Wir haben Menschen wie dich!</p>
        <p class="!text-base">Danke, dass du unseren Wahlkampf mit einer Spende unterstützt!</p>
        <div class="rnw-widget-container mt-12 max-w-[790px]"></div>
        <script src="https://tamaro.raisenow.com/grnes-c83e/latest/widget.js"></script>
        <script>
            window.rnw.tamaro.runWidget('.rnw-widget-container', {
            paymentWidgetBlocks: [ //Schritt 1
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
            language: 'de',
            purposes: ['p1'],
            purposeDetails: {
                p1: {
                    stored_campaign_id: 2,
                },
            },
            });
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
