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
            <div class="h-full w-[40vw] flex">
                <div class="h-full w-[20vw] mt-10">
                    <form class="text-white flex flex-col ml-8 gap-6" action="{{ route('user.update') }}" method="POST">
                        <div class="flex flex-col">
                            <label class="ml-6 mb-2" for="first_name">Prénom</label>
                            <div class="container__input p-4 border-2 rounded-full w-[18vw]">
                                <input class="input outline-none bg-transparent placeholder-white w-[25vw]"
                                    type="text" name="first_name" required value="{{ Auth::user()->first_name }}">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="ml-6 mb-2" for="last_name">Nom</label>
                            <div class="container__input p-4 border-2 rounded-full w-[18vw]">
                                <input class="input outline-none bg-transparent placeholder-white w-[25vw]"
                                    type="text" name="last_name" required value="{{ Auth::user()->last_name }}">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="ml-6 mb-2" for="email">Email</label>
                            <div class="container__input p-4 border-2 rounded-full w-[18vw]">
                                <input class="input outline-none bg-transparent placeholder-white w-[25vw]"
                                    type="email" name="email" required value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="ml-6 mb-2" for="birthday">Date de Naissance</label>
                            <div class="container__input p-4 border-2 rounded-full w-[18vw]">
                                <input class="input outline-none bg-transparent placeholder-white w-[25vw]"
                                    type="date" name="birthday" required value="{{ Auth::user()->birthday }}">
                            </div>
                        </div>
                        <div class="flex flex-col text-white">
                            <p>Type de compte : <span>"{{ Auth::user()->role }}"</span></p>
                        </div>
                        <div class="flex gap-5">
                            <button id="btn__modif" class="p-3 px-12 border-2 rounded-full text-white text-lg mt-8" type="button">Modifier</button>
                            <button id="btn__cancel" class="btn__visible p-3 px-12 border-2 border-red-600 rounded-full text-white text-lg mt-8" type="button" style="display: none" >Annuler</button>
                            <button id="btn__uptade" class="btn__visible p-3 px-12 border-2 rounded-full text-white text-lg mt-8" type="submit" style="display: none" >Valider</button>
                        </div>
                    </form>
                </div>
                <div class="h-full w-[20vw] flex justify-center mt-10">
                    <img class="w-60 h-60 rounded-full" src="{{ asset('medias/images/pp.jpg') }}" alt="">
                </div>
            </div>
        </section>



        <div id="container__verif"
            class="absolute w-1/2 h-1/2 bg-black top-[50%] left-[50%] text-white flex flex-col items-center justify-center gap-20"
            style="display: none">
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
