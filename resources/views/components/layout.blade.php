<!doctype html>

<title>Animal House HomePage</title>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>

            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">Home Page</a>
                @auth
                    <a href="/home_front" class="text-xs font-bold uppercase ml-2.5">Home Front</a>
                    @if (auth()->user()?->email == 'admin@mail.it' )
                        <a href="/home_admin" class="text-xs font-bold uppercase ml-2.5">Home Admin</a>
                    @endif

                    <a  href="{{route('gestione_account')}}" class="bg-red-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"> Gestione account </a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="text-red-700 text-xs ml-3">
                            Log Out
                        </button>
                    </form>
                @else
                    <a href="{{route('login')}}" class="bg-red-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Login
                    </a>

                    <a href="{{route('register')}}" class="bg-red-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Register
                    </a>
                @endauth
            </div>
        </nav>

        <header class="max-w-xl mx-auto  text-center">

            <img src="./images/animalHouse.png">

            <h2 class="inline-flex mt-2">By Mattia Brullo & Marco Borghi <img src="./images/lary-head.svg"
                                                               alt="Head of Lary the mascot"></h2>




        </header>

        {{ $slot}}


    </section>
</body>
<style>
    /*

<h1 class="text-4xl">
                The <span class="text-green-700">Animal House </span>
            </h1>
    */

    </style>
