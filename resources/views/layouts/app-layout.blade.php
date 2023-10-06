<!DOCTYPE html>
<html lang="de_CH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vergiss die Wahlen nicht!</title>

    <!-- Primary Meta Tags -->
    <title>Vergiss die Wahlen nicht!</title>
    <meta name="title" content="Vergiss die Wahlen nicht!" />
    <meta name="description" content="Stell dir vor, dass 27% der Bevölkerung entscheidet, was uns alle betrifft: Bei den Wahlen vor 4 Jahren war das so. Das müssen wir ändern!" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mehr-denn-je.ch/" />
    <meta property="og:title" content="Vergiss die Wahlen nicht!" />
    <meta property="og:description" content="Stell dir vor, dass 27% der Bevölkerung entscheidet, was uns alle betrifft: Bei den Wahlen vor 4 Jahren war das so. Das müssen wir ändern!" />
    <meta property="og:image" content="{{ asset("media/images/og_small.jpg") }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://mehr-denn-je.ch/" />
    <meta property="twitter:title" content="Vergiss die Wahlen nicht!" />
    <meta property="twitter:description" content="Stell dir vor, dass 27% der Bevölkerung entscheidet, was uns alle betrifft: Bei den Wahlen vor 4 Jahren war das so. Das müssen wir ändern!" />
    <meta property="twitter:image" content="{{ asset("media/images/og_small.jpg") }}" />

    <link rel="apple-touch-icon" sizes="144x144" href="/media/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/media/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/media/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/media/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/media/images/favicon/safari-pinned-tab.svg" color="#84b414">
    <link rel="shortcut icon" href="/media/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#84b414">
    <meta name="msapplication-config" content="/media/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    @vite(["resources/css/app.scss"])
</head>
<body>

    <main id="main-content" {{$attributes}}>
        {{ $slot }}
    </main>

    @if (env('APP_ENV') == 'production')
    <!-- Matomo -->
    <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//analytics.wahlen-23.ch/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '12']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
    <!-- End Matomo Code -->
    @endif

    @vite("resources/js/app.js")
</body>

</html>
