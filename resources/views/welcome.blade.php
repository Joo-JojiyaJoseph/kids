<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KMS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/logo/logo.png') }}" width="100" height="100" class="w-60 h-auto object-cover" alt="Uncle Bun">
            </div>
            <h1 class="text-3xl font-semibold text-center">Kitchen Management System <br> (KMS)</h1>
            <div class="flex items-center justify-center mt-14">
                <a href="{{ route('login') }}" class="bg-blue-300 px-6 py-2 rounded-lg border border-black text-black text-lg font-semibold uppercase tracking-wider">Login</a>
            </div>
        </div>
    </div>
</body>

</html>
