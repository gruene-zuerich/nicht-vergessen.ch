<!DOCTYPE html>
<html lang="de_CH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vergiss die Wahlen nicht!</title>
    @vite(["resources/css/app.scss"])
</head>
<body>

    <main id="main-content">
        {{ $slot }}
    </main>

    @vite("resources/js/app.js")
</body>

</html>
