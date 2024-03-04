<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/app.css">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <section class="container">
        <nav>
            <a href="{{route('todo')}}" @class(['current'=> request()->is('/')])>todo</a>
            <a href="{{route('counter')}}" @class(['current'=> request()->is('livewire/counter')])>counter</a>
            <a href="{{route('search-filter')}}" @class(['current'=> request()->is('livewire/search')])>search</a>
        </nav>
        {{ $slot }}
    </section>
</body>

</html>