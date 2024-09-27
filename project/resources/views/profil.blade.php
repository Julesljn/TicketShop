<x-head />

<body class="p-6">
    <div class="bg"></div>
    <x-headers.home-header />
    <main class="flex justify-center relative">
        <section class="border-2 w-[60vw] h-[75vh] mt-16 rounded-3xl flex">
            <div class="h-full w-[20vw] border-r-2 flex flex-col">
                <ul class="text-white text-xl flex flex-col gap-4 mt-8 ml-9">
                    <li><a href="">Mes informations</a></li>
                    <a href="{{ route('user.logout') }}">Déconnexion</a></li>
                    <li><button id="btn__delete">Supprimer mon compte</button></li>
                </ul>
            </div>
            <div class="h-full w-[40vw]">

            </div>
        </section>
        <div id="container__verif" class="absolute w-1/2 h-1/2 bg-black top-[50%] left-[50%] text-white flex flex-col items-center justify-center gap-20" style="display: none">
            <h2 class="text-2xl">Êtes vous sur de vouloir supprimer votre compte ?</h2>
            <div class="flex gap-16">
                <button id="verifBtn__back" class="py-6 px-10 rounded-full border-2">Retour</button>
                <a href="{{ route('user.delete') }}" class="py-6 px-10 rounded-full border-2 bg-red-600">Supprimer</a>
            </div>
        </div>
    </main>
    @vite('resources/js/profil.js')
</body>

</html>
