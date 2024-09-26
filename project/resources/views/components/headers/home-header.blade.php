<header class="text-white flex items-center justify-between relative">
    <h1 class="text-3xl"><a href="{{ route('home') }}">TicketShop</a></h1>
    <nav>
        <ul class="flex gap-32 p-6 rounded-full border-2">
            <li><a href="">Accueil</a></li>
            <li><a href="">Présentation</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
    <div class="flex gap-20">
        @auth
            <a class="py-6 px-10 rounded-full border-2" href="{{ route('menu') }}">Mon Espace</a>
            <a class="py-6 px-10 rounded-full border-2" href="{{ route('profil') }}">Mon profil</a>
        @else
        
            <a class="py-6 px-10 rounded-full border-2" href="{{ route('register') }}">S'inscrire</a>
            <a class="py-6 px-10 rounded-full border-2 bg-white text-black" href="{{ route('login') }}">Se Connecter</a>
        @endauth
    </div>
</header>
