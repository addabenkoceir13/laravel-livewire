<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/counter" wire:navigate>Counter</a></li>
                <li><a href="/bird" wire:navigate>Bird Form</a></li>
                <li><a href="/lazy" wire:navigate>Lazy Loading</a></li>
            </ul>
        </nav>
        {{ $slot }}
    </body>
</html>
