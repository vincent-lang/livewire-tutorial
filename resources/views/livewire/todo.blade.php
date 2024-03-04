<div>
    <link rel="stylesheet" href="/css/app.css">
    <section class="container">
        <nav>
            @include('/components/layouts.navigation')
        </nav>
        <main>
            <section>
                <h1>Welcome to the todo list!!!</h1>
            </section>
            <form wire:submit='add'>
                <input type="text" wire:model='todo'>

                <button type="submit">Add</button>
            </form>
            <ul>
                @foreach($todos as $todo)
                <li>{{$todo}}</li>
                @endforeach
            </ul>
        </main>
    </section>
</div>