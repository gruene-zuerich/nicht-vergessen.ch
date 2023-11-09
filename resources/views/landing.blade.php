@php
 $messages = array(
    "Hallo! 👋\nEin SVP-Ständerat Rutz wäre fatal für den Kanton Zürich und fürs Klima! Wähle jetzt Tiana Moser ins «Stöckli». Gib deine Stimme ab! 🗳️💪",
    "Salut! 👋\nLiegen dir ein weltoffener Kanton Zürich und das Klima auch am Herzen? Dann wähle jetzt Tiana Moser in den Ständerat! Deine Stimme zählt! 🗳️💚",
    "Hoi! 💚\nBei den Ständeratswahlen gilt es einen weiteren Rechtsrutsch zu verhindern und den Klimaschutz zu stärken. Deswegen braucht es Tiana Moser für den Kanton Zürich im «Stöckli». Geh wählen! 🗳️💪",
    "Hey! 🌍\nDer Kanton Zürich braucht eine weltoffene und klimapolitisch engagierte Vertretung im «Stöckli»! Darum jetzt Tiana Moser in den Ständerat wählen. Auf deine Stimme kommt es an! 🗳️💪",
    "Ciao! 👋\nDie Entscheidung liegt bei dir: Tiana Moser für eine zukunftsorientierte Politik oder ein weiterer Rechtsruck mit Gregor Rutz. Wähle jetzt bewusst für einen weltoffenen Kanton und für das Klima! 🗳️💚",
    "Salü! 👋\nTiana Moser steht für eine fortschrittliche und nachhaltige Politik im «Stöckli». Gib jetzt deine Stimme für die Zukunft ab! 🗳️💪",
    "Hoi! 💚\nDeine Stimme für Tiana Moser ist eine Stimme für Klimaschutz und weltoffene Politik. Mach mit und wähle jetzt für eine bessere Zukunft! 🗳️🌍",
    "Hey! 🌍\nTiana Moser setzt sich für eine umweltfreundliche und fortschrittliche Politik ein. Wähle jetzt für den Kanton und das Klima! Deine Stimme macht den Unterschied! 🗳️💚",
    "Hallo! 👋\nDer Kanton Zürich verdient eine starke Stimme für Klimaschutz und Vernunft im Ständerat. Wähle Tiana Moser für eine nachhaltige Zukunft! 🗳️💚",
    "Ciao! 👋\nMit Tiana Moser entscheidest du dich für eine umweltfreundliche und weltoffene Vertretung im Ständerat. Gib deine Stimme für eine bessere Zukunft ab! 🗳️💪",
    "Hoi! 💚\nWähle jetzt Tiana Moser für eine nachhaltige Politik im Ständerat. Deine Stimme zählt für den Kanton und fürs Klima! 🗳️🌍",
    "Hey! 🌍\nTiana Moser ist die richtige Wahl für eine zukunftsorientierte Politik im «Stöckli». Gib deine Stimme ab und setze ein Zeichen für Klimaschutz! 🗳️💚",
    "Hallo! 👋\nDeine Stimme entscheidet: Tiana Moser für eine progressive und klimafreundliche Politik im Ständerat. Jetzt wählen gehen! 🗳️💪",
    "Salü! 👋\nFür eine weltoffene und klimabewusste Vertretung im Ständerat: Wähle jetzt Tiana Moser! Deine Stimme macht den Unterschied! 🗳️💚",
    "Hoi! 💚\nEntscheide dich für Klimaschutz und eine zukunftsorientierte Politik. Wähle Tiana Moser ins «Stöckli» und gestalte eine bessere Zukunft! 🗳️🌍",
    "Salut! 👋\nEntscheide dich für Vernunft und Klimaschutz im Ständerat. Wähle jetzt Tiana Moser und setze ein Zeichen für eine bessere Zukunft! 🗳️💪",
    "Hoi! 💚\nTiana Moser steht für eine weltoffene und klimabewusste Politik. Wähle mit Herz und Verstand für den Kanton und das Klima! 🗳️🌍",
    "Hey! 🌍\nDeine Stimme zählt für den Kanton und das Klima. Wähle Tiana Moser für eine progressive und nachhaltige Politik im Ständerat! 🗳️💚"
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
            <p>Aufgepasst: Bis zum 19. November wählt der Kanton Zürich seine zweite Vertretung im Ständerat.</p>
            <p class="!text-lg">Beim letzten zweiten Wahlgang der Ständeratswahlen 2019 haben NUR 20 Prozent der Zürcher:innen gewählt. Für so eine wichtige Wahl verdammt wenig, oder? Damit es 2023 anders wird, kommt es jetzt darauf an, möglichst viele Menschen an die Urnen zu bringen.</p>
            <p class="!text-lg">Wenn wir einen weiteren Rechtsrutsch verhindern und den Klimaschutz im Ständerat stärken wollen, dann müssen wir alle unser Umfeld daran erinnern, jetzt Tiana Moser zu wählen. <b>So kannst du mitmachen:</b></p>
            <div class="nv-buttongrid mt-8">
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'voicemessages']);" data-screen="sprachnachrichten">Sprachnachrichten verschicken</a> --}}
                {{-- <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'reffle']);" data-screen="gewinnspiel">Beim Gewinnspiel mitmachen</a> --}}
                <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'textmessages']);" data-screen="textnachrichten">Nachrichten an Bekannte schreiben</a>
                {{-- <a href="https://nuudel.digitalcourage.de/jZ4ANroTfyRaIAVe" target="_blank" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'flyer']);" class="nv-option-button animate w-full md:w-fit">Beim Flyern helfen</a> --}}
                <a href="https://gruene.ch/mitglied-werden" target="_blank" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'member']);" class="nv-option-button animate w-full md:w-fit">Mitglied werden</a>
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
        <p>Anders als unsere politischen Gegner:innen haben wir aus gutem Grund keine Grossspenden von Konzernen, Banken und Flughafen. Wir haben Menschen wie dich!</p>
        <p class="!text-base">Danke, dass du den Wahlkampf der GRÜNEN Kanton Zürich mit einer Spende unterstützt!</p>
        {{-- <div class="rnw-widget-container mt-12 max-w-[790px]"></div> --}}
        <div class="dds-widget-container mt-12 max-w-[790px]"></div>
        <script type="text/javascript" referrerpolicy="no-referrer" src="https://widget.raisenow.com/widgets/lema/grnek-85d9/js/dds-init-widget-de.js"></script>
        {{-- <script src="https://tamaro.raisenow.com/grnes-c83e/latest/widget.js"></script>
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
        </script> --}}
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

    <x-screen-layout id="gewinnspiel" class="action-magenta">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Znacht wie eine Nationalrät*in!</h1>
        <p><b>Wie viele Stimmen wird die GRÜNE Liste im Kanton Zürich bei diesen Wahlen bekommen?</b> Rate richtig und gewinne einen Znacht mit unseren Nationalrät*innen!</p>
        <p class="!text-base">Bevor wir beginnen, hast du bereits gewählt?</p>
        <div class="nv-buttongrid mt-4">
            <a href="#" class="nv-option-button nv-share-button" style="--icon: ''" onclick="_paq.push(['trackEvent', 'Support', 'voted', 'yes']);" data-screen="gewinnspiel-2">Ja, ich habe schon gewählt! <span class="emoji ml-2 text-2xl mt-[-0.5rem]">😄</span></a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: ''" onclick="_paq.push(['trackEvent', 'Support', 'voted', 'no']);" data-screen="gewinnspiel-2">Ich mache es gleich, versprochen! <span class="emoji ml-2 text-2xl mt-[-0.5rem]">😖</span></a>
        </div>
        <script type="text/json" id="messages-json">
            {!! json_encode($messages) !!}
        </script>
    </x-screen-layout>

    <x-screen-layout id="gewinnspiel-2" class="action-green">
        <a href="#" class="nv-action-back" data-screen="reverse"><span class="material-symbols-outlined">chevron_left</span> Zurück</a>
        <h1>Was schätzt du?</h1>
        <p>Vor 4 Jahren hat die GRÜNE Liste im Kanton Zürich 2’054’383 Stimmen erhalten. Was denkst du, wie viele sind es am 22. Oktober?</p>
        <p class="!text-base">Gib eine Schätzung ab und gewinne ein Znachtessen mit den GRÜNEN Zürcher Nationalrät*innen!</p>
        <form action="/guess" method="POST" class="grid md:grid-cols-2 mt-10 gap-6 max-w-2xl">
            @csrf
            @if ($errors->any())
                <div class="bg-red-300 border-2 border-red-700 md:col-span-2 p-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="number" name="guess" class="border-b-2 border-gruen" placeholder="Gib hier deine Schätzung ab!" required>
            <input type="text" name="phone" class="border-b-2 border-gruen" placeholder="Telefonnummer (optional)">
            <input type="email" name="email" class="border-b-2 border-gruen md:col-span-2" placeholder="E-Mail Adresse" required>
            <div class="md:col-span-2">
                <input type="checkbox" id="optin" name="optin" value="1" checked>
                <label for="optin" class="inline text-sm">Ich bin einverstanden, dass die GRÜNEN Zürich mich auf dem Laufenden halten. Mehr dazu im <a href="https://gruene.ch/datenschutz" target="_blank" class="underline text-magenta">Datenschutz</a></label>
            </div>
            @if (session("source"))
                <input type="hidden" name="source" value="{{session("source")}}">
            @endif
            <button type="submit" class="nv-option-button nv-share-button md:col-span-2" style="--icon: ''">Abschicken</button>
        </form>
        <script type="text/json" id="messages-json">
            {!! json_encode($messages) !!}
        </script>
    </x-screen-layout>

    <x-screen-layout id="gewinnspiel-3" class="action-magenta">
        <h1>Erhöhe deine Chancen!</h1>
        <p>Unter allen Teilnehmer*innen verlosen wir einen zweiten Platz am Tisch! Für jede Person, die du zur Teilnahme am Gewinnspiel motivierst, erhältst du ein zusätzliches Los.</p>
        <p class="!text-base"> Verschicke dazu diesen Link:</p>
        <div class="flex items-center mt-4">
            <a href="https://nicht-vergessen.ch/gewinnspiel/{{session("guess")}}" class="py-2 px-3 underline text-magenta bg-magenta bg-opacity-10 border-2 border-magenta inline-block text-sm">
                https://nicht-vergessen.ch/gewinnspiel/{{session("guess")}}
            </a>
        </div>
        <div class="nv-buttongrid mt-4">
            <a href="#" class="nv-option-button nv-share-button" id="copy-source-url" data-source-url="https://nicht-vergessen.ch/gewinnspiel/{{session("guess")}}" style="--icon: ''" onclick="_paq.push(['trackEvent', 'Support', 'copy-source-link', 'copied']);">Link kopieren</a>
            <a href="#" class="nv-option-button nv-share-button" style="--icon: ''" onclick="_paq.push(['trackEvent', 'Support', 'copy-source-link', 'rather-not']);" data-screen="gewinnspiel-4">Lieber nicht <span class="emoji ml-2 text-2xl mt-[-0.5rem]">😅</span></a>
        </div>
    </x-screen-layout>

    <x-screen-layout id="gewinnspiel-4" class="action-gruen">
        <h1>Eine letzte Bitte</h1>
        <p>Vor vier Jahren haben nur 27% der gesamten Bevölkerung unseres Kantons entschieden, wen wir nach Bern schicken. <b>Das muss sich dieses Jahr ändern.</b></p>
        <p class="!text-base">Hilf mit, indem du dein Umfeld an die Wahlen erinnerst! Wir haben dir hier einige Hilfsmittel zur Verfügung gestellt:</p>
        <div class="nv-buttongrid mt-4">
            <a href="#" class="nv-option-button nv-share-button" data-screen="start">Ich bin dabei!</a>
        </div>
    </x-screen-layout>
</x-app-layout>
