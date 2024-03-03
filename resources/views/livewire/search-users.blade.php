<div>
    <link rel="stylesheet" href="/css/app.css">

    <input class="search" wire:model.live="search" type="search" placeholder="search a person....">

    @foreach($users as $user)
    <div class="user">
        <li>
            {{ $user->name }}
        </li>
    </div>
    @endforeach
</div>