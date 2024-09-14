<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">


    <!-- Page Content -->
    <main>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <h2 class="text-3xl font-bold mb-4">Todo Details</h2>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <h2><strong>Todo Title is: </strong>{{$todo->title}}</h2>
                            <p><strong>Todo Description Is: </strong>{{$todo->description}} </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </main>
</div>
</body>
</html>
