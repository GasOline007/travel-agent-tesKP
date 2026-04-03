<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    {{-- <h1>welcome about</h1>
    <h2>owner: {{ $nama }}</h2>
    <a href="/">go to home</a> --}}

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <div class="bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <x-navbar></x-navbar>
        </header>
        @foreach ($pakets as $paket)
            <x-tour-card :paket="$paket" />
        @endforeach
    </div>
</body>
</html>