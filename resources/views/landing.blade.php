<x-app-layout class="main-app-screen">
    <div class="nv-action-section" data-screen-id="title">
        <div class="nv-action-section-content">
            <h1>Danke, dass du mithilfst!</h1>
            <p>Du hast es gesehen: Wir müssen Menschen an die Urnen mobilisieren. <b>Dabei kannst du uns unterstützen.</b> Hier hast du ein paar Optionen, wie du uns helfen kannst:</p>
            <p class="!text-lg">Wähle hier aus, wie du uns beim Mobilisieren unserer Wähler*innen helfen möchtest:</p>
            <div class="nv-chechboxes-grid flex gap-4 flex-wrap mt-8">
                <x-checkbox name="support-type[]" label="Nachrichten an Bekannte schreiben" value="textmessages" helper="Wir haben dir ein paar Nachrichten vorbereitet, welche du über verschiedene Kanäle versenden kannst"/>
                <x-checkbox name="support-type[]" label="Sprachmemos verschicken" value="voicememos" helper="Unsere National- und Ständeratsspitze hat für dich Sprachnotizen aufgenommen, welche du an deine Freund*innen verschicken kannst."/>
                <x-checkbox name="support-type[]" label="Beim Flyern helfen" value="flyers"/>
                <x-checkbox name="support-type[]" label="Memes verschicken" value="memes" helper="Unser Social Media Team hat dir Memes vorbereitet, welche du herunterladen und verschicken kannst."/>
                <x-checkbox name="support-type[]" label="Material bestellen" value="ordermaterial"/>
                <x-checkbox name="support-type[]" label="Bilder für Social Media herunterladen" value="downloadimages"/>
                <x-checkbox name="support-type[]" label="Spenden" value="donation"/>
            </div>
        </div>
    </div>
</x-app-layout>
