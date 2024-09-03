<x-master>

    <x-nav>

    </x-nav>
    <main class="w-100 h-75 d-flex flex-column justify-content-center mt-5">
        <h1 class="text-light text-center mx-auto ">Apprenez en plus sur vos meilleurs amis les chats!</h1>

        <img src="https://cataas.com/cat" class="rounded mx-auto mt-5 d-block" alt="..." width="300" height="300">

        <div class="w-75 mx-auto d-flex flex-column justify-content-center text-center">
            <p class="text-light text-center mt-5">"{{ $fait->fait }}"</p>
        </div>
        <div class="w-25 mx-auto d-flex flex-column justify-content-center text-center mt-5">
            <a href="{{ route('faits.index') }}" class="btn btn-outline-light">liste des faits</a>
        </div>
    </main>

</x-master>
