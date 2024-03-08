<div>
    <link rel="stylesheet" href="/css/app.css">
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
            <li>
                <a href="{{route('user.edit', [$user->id])}}">edit user</a>
            </li>
        </div>
        @endforeach
    </main>
</div>