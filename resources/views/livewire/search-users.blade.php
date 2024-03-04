<div>
    <link rel="stylesheet" href="/css/app.css">
    <section class="container">
        <nav>
            @include('/components/layouts.navigation')
        </nav>
        <main>
            <section>
                <h1>Welcome to the search users by letter!!!</h1>
            </section>

            <input class="search" wire:model.live="search" type="search" placeholder="search a person....">

            @foreach($users as $user)
            <div class="user">
                <li>
                    {{ $user->name }}
                </li>
            </div>
            @endforeach
        </main>
    </section>
</div>