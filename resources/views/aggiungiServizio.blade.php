<?php $posts=App\Models\Post::all();
$user = (Auth::User())->toArray();
$name = Auth::user()->username;
$email = Auth::user()->email;
?>

<x-layout2>

    <!doctype html>

    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">


            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">


            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">





                    <div class="col-span-8" >

                        <div class="top">

                            <div id="backtohome">
                                <a href=" {{route('home_front')}}"  class="bg-red-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
                            Back to home page!

                                </a>
                            </div>
                        </div>

                        <div id = "text1" class="text">
                            <h1 class="title">
                               Dog sitter
                            </h1>
                            <p>Sviluppa una relazione di fiducia con il proprietario che ti affida il suo amato animale domestico e al tempo
                                stesso goditi l'attenzione di quelli che ti invidieranno il tuo nuovo amico peloso!
                                Pet Sitting non vuol dire solo inondare di affetto e cure un animale domestico ma ti permette di essere pagato per fare una cosa che ti piace. Visto che sei tu a decidere il prezzo e la disponibilità,
                                hai piena flessibilità per gestire il tutto come meglio ti conviene.  </p>
                        </div>

                        <div id = "text2" class="text">
                            <h1 class="title">
                               Visita a domicilio
                            </h1>
                            <p>Molti studi che  hanno visto protagonisti gli animali domestici, dimostrano come un’assenza prolungata del compagno umano possa provocare una forma di stress o
                                depressione che peggiora se associata ad un riposo dell’animale troppo breve o di scarsa qualità.
                            In questi casi visite a domicilio di una persona di fiducia, possono migliorare la vita dei nostri amici a quattro zampe.</p>
                        </div>

                        <div id = "text3" class="text">
                            <h1 class="title">
                              Pensione estiva
                            </h1>
                            <p>Arriva il momento delle vacanze estive e sempre più persone, non potendo portare con se l' amico a quattro zampe, si affidano ad una pensione per cani.
                                In questo tipo di pensione il nostro amico a quattro zampe soggiornerà in una vera e propria casa all’ interno di un nuovo “branco-famiglia”.
                                Sono sempre di più le persone che scelgono questo tipo di soluzione.</p>
                        </div>

                        <section id="formSection" class="col-span-12 mx-2.5">


                           <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <p class="formP" > Tipologia
                                    <select required name="type">
                                        <option value="dog_sitter">Dog sitter</option>
                                        <option value="dogs_pension">Pensione estiva</option>
                                        <option value="home_visit">Visita a domicilio per animali soli</option>
                                    </select>
                                </p>
                                <p class="formP" > Numero di telefono
                                    <input name="tel" required >
                                </p>

                                <p class="formP" > Email
                                    <input required type="email"  name="email"  value="{{ $email }}">
                                </p>
                                <p class="formP" > Nome
                                    <input required type="text"  name="nome"  value="{{ $name }}">
                                </p>
                                <p  required class="formP" > Immagine
                                <input required type="file"  name="image" accept="image/png, image/jpeg">

                                </p>


                                <p class="formP"  > Descrizione
                                    <textarea required name="description" rows="5" class="w-full text-sm" placeholder="Scrivi una descrizione..."></textarea>


                                </p>
                                <button id="invia" type="submit" onclick=""> Invia</button>
                            </form>
                        </section>
                    </div>


            </article>
            </main>
            @if (session()->has('success'))
                <div class="fixed bg-blue-500 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-sm">
                    <p>{{ session('success') }}</p>
                </div>

            @endif

        </section>
    </body>
</x-layout2>

<style>

    .formP{
         text-decoration:underline;
    }
    body{

        background-image:url('/images/annunci.jpg');
        background-size:cover;
        background-repeat:repeat;
    }
    #backToServices{
       margin-left:35%;

        }
        .title{
            border-bottom: 2px solid rgb(190, 3, 3);
    font-size:35px;
    font-weight:bold;
    color:rgb(190, 3, 3);
        }
        .col-span-8{
            display: flex;
	        flex-direction: column;
	        flex-wrap: wrap;

            margin-left:27%;
            width:100%;
        }
        .top{
            flex:1;
            text-align: center;
            margin-bottom:2%;
        }

        #text2{

            text-align: right;
        }
        .text{
            padding:3%;
            margin:2%;
            flex:1;
            background: rgba(255, 255, 255, 0.5);
            box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        }

        #formSection{
            background: rgba(255, 255, 255, 0.5);
            flex:3;
            padding:3%;
            margin:1%;
            box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        }
        .formP {
            margin:7%;
            padding-bottom:2%;
            border-bottom: 2px solid rgb(190, 3, 3);
        }
        #invia{
             background-color:rgb(190, 3, 3);
            color:white;
            border:1px solid black;
            padding:1%;
            padding-left:7%;
            padding-right:7%;
            margin-bottom:2%;


            float:right;
        }




</style>
