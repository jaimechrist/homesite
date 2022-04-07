<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Nowhere Yet' }}</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jaimechrist.js') }}"></script>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
