<x-head />

<body class="p-6">
    <div class="bg"></div>
    <x-headers.form-header />
    <main class="relative">
        <div class="mt-[10vh]">
            <form class="flex flex-col items-center gap-10 text-lg text-white" method="POST"
                action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="text"
                        placeholder="Prénom" name="first_name">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="text"
                        placeholder="Nom" name="last_name">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="email"
                        placeholder="Email" name="email">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="password"
                        placeholder="Mot de Passe" name="password">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[20vw]" type="date"
                        placeholder="Date de Naissance" name="birthday">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit"
                    class="p-6 px-16 border-2 rounded-full text-white text-lg mt-8">S'inscrire</button>
            </form>
        </div>
    </main>
</body>

</html>
