@props([
    'title' => 'Pertineo'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://use.typekit.net/doy8nke.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <x-header.dynamic></x-header.dynamic>

    <main>
        {{ $slot }}
    </main>

    <footer></footer>
</body>
</html>
