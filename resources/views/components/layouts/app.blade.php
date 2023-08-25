<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100 dark:bg-gray-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'MailerLite' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="h-full antialiased font-sans">
        {{ $slot }}
    </body>
</html>
