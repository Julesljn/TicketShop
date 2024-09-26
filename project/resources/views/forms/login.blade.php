<x-head />

<body class="p-6">
    <div class="bg"></div>
    <x-headers.form-header />
    <main class="relative">
        <div class="mt-[10vh]">
            <form class="flex flex-col items-center gap-10 text-lg text-white" method="POST"
                action="{{ route('user.login') }}" enctype="multipart/form-data">
                @csrf
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="email"
                        placeholder="Email" name="email">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="password"
                        placeholder="Mot de Passe" name="password">
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
                <button class="p-6 px-16 border-2 rounded-full text-white text-lg mt-8">Se Connecter</button>
            </form>
        </div>
    </main>
</body>

</html>
