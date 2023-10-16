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
    "Hoi du 💚!\nHast du die Umfragen gesehen? Die SVP wird bereits jetzt als Wahlsiegerin ausgerufen. Das müssen wir unbedingt verhindern! Damit es keinen Rechtsrutsch gibt, wähle heute noch die Grüne Liste 3 und Daniel Leupi in den Ständerat! 🗳️💪",
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
            <p>Damit dieses Jahr nicht wieder nur 27% der Bevölkerung entscheiden, wen der Kanton Zürich nach Bern schickt, müssen wir Menschen an die Urnen bringen.</p>
            <p class="!text-lg"> Wenn wir den Rechtsrutsch im Parlament verhindern wollen, dann müssen wir alle unser Umfeld daran erinnern, jetzt GRÜNE Liste 3 und Daniel Leupi in den Ständerat zu wählen. <b>So kannst du mitmachen:</b></p>
            <div class="nv-buttongrid mt-8">
                <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'voicemessages']);" data-screen="sprachnachrichten">Sprachnachrichten verschicken</a>
                <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'reffle']);" data-screen="gewinnspiel">Beim Gewinnspiel mitmachen</a>
                <a href="#" class="nv-option-button animate w-full md:w-fit" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'textmessages']);" data-screen="textnachrichten">Nachrichten an Bekannte schreiben</a>
                <a href="https://nuudel.digitalcourage.de/jZ4ANroTfyRaIAVe" target="_blank" onclick="_paq.push(['trackEvent', 'Support', 'support choice', 'flyer']);" class="nv-option-button animate w-full md:w-fit">Beim Flyern helfen</a>
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
