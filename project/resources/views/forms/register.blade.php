<x-head />

<body class="p-6">
    <div class="bg"></div>
    <x-forms.form-header />
    <main class="relative">
        <div class="mt-[10vh]">
            <form class="flex flex-col items-center gap-10 text-lg text-white" method="POST" action="">
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="text" placeholder="Prénom">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="text" placeholder="Nom">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="email" placeholder="Email">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[25vw]" type="password" placeholder="Mot de Passe">
                </div>
                <div class=" p-6 border-2 rounded-full w-[25vw]">
                    <input class="outline-none bg-transparent placeholder-white w-[20vw]" type="date" placeholder="Date de Naissance">
                </div>
                <button class="p-6 px-16 border-2 rounded-full text-white text-lg mt-8">S'inscrire</button>
            </form>
        </div>
    </main>
</body>

</html>
