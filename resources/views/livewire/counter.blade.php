<div>
    <link rel="stylesheet" href="/css/app.css">
    <section class="container">
        <nav>
            @include('/components/layouts.navigation')
        </nav>
        <main>
            <section>
                <h1>Welcome to the counter!!!</h1>
            </section>
            <h1>{{ $count }}</h1>
            <button wire:click="up">+</button>
            <button wire:click="down">-</button>
        </main>
    </section>
    <!-- {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}} -->
</div>