<x-head />

<body class="p-6">
    <div class="bg"></div>
    <x-headers.home-header />
    <main class="flex justify-center relative">
        <section class="border-2 w-[60vw] h-[75vh] mt-16 rounded-3xl flex">
            <div class="h-full w-[20vw] border-r-2 flex flex-col">
                <ul class="text-white flex flex-col gap-4 mt-8 ml-9">
                    <li><a href="">Mes informations</a></li>
                    <li><a href="">Modifier mes informations</a></li>
                    <a href="{{ route('user.logout') }}">Déconnexion</a></li>
                    <li><a href="{{ route('user.delete') }}">Supprimer mon compte</a></li>
                </ul>
            </div>
            <div class="h-full w-[40vw]">
                
            </div>
        </section>
    </main>
</body>

</html>
