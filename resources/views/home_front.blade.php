<?php
  use App\Http\Controllers\ApiController;



  $count= 2;
  $animal= new ApiController;
  $animal= $animal->getAnimals();
  shuffle($animal);



?>
<x-layout>
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">


           <div class="lg:grid lg:grid-cols-2">



               <article
                   class="transition-colors duration-300 hover:bg-red-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="{{$animal[0]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>


                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href=" {{route('showLeaderboard')}}">Leaderboard Game</a>
                                   </h1>


                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione troverete le classifiche riguardanti il QuizGame e il MemoryGame!
                               </p>


                           </div>

                           <footer class="flex justify-between items-center mt-8">
                               <div class="flex items-center text-sm">
                                   <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                   <div class="ml-3">
                                       <h5 class="font-bold">Mattia Brullo</h5>

                                   </div>
                               </div>

                               <div>
                                   <a href="{{route('showLeaderboard')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-red-700 hover:bg-red-800 rounded-full py-2 px-8"
                                   >
                                       See Now
                                   </a>
                               </div>
                           </footer>
                       </div>
                   </div>
               </article>

               <article
                   class="transition-colors duration-300 hover:bg-red-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="{{$animal[1]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img" >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>


                               <div class="mt-4">
                                   <h1 class="text-3xl" >
                                   <a href=" {{route('showShowcase')}}">Bacheca!</a>
                                   </h1>


                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione di Animal House è possibile condividere immagini, aneddoti, e informazioni sugli animali.
                               </p>


                           </div>

                           <footer class="flex justify-between items-center mt-8">
                               <div class="flex items-center text-sm">
                                   <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                   <div class="ml-3">
                                       <h5 class="font-bold">Mattia Brullo</h5>

                                   </div>
                               </div>

                               <div>
                                   <a href=" {{route('showShowcase')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-red-700 hover:bg-red-800 rounded-full py-2 px-8"
                                   >
                                       See Now
                                   </a>
                               </div>
                           </footer>


                       </div>
                   </div>
               </article>

               <article
                   class="transition-colors duration-300 hover:bg-red-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="{{$animal[2]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>


                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href=" {{route('showServices')}}">Visualizza Annunci</a>
                                   </h1>


                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione troverete tutti gli annunci di lavoro pubblicati dagli utenti del nostro sito.
                               </p>


                           </div>

                           <footer class="flex justify-between items-center mt-8">
                               <div class="flex items-center text-sm">
                                   <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                   <div class="ml-3">
                                       <h5 class="font-bold">Marco Borghi</h5>

                                   </div>
                               </div>

                               <div>
                                   <a href="{{route('showServices')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-red-700 hover:bg-red-800 rounded-full py-2 px-8"
                                   >
                                       See Now
                                   </a>
                               </div>
                           </footer>
                       </div>
                   </div>
               </article>

               <article
                   class="transition-colors duration-300 hover:bg-red-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="{{$animal[3]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>


                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href=" {{route('showAggiungiServizio')}}">Offri un servizio</a>
                                   </h1>


                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione puoi offrire le tue prestazioni lavorative in ambito Pet-Care agli altri utenti della piattaforma.
                               </p>


                           </div>

                           <footer class="flex justify-between items-center mt-8">
                               <div class="flex items-center text-sm">
                                   <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                   <div class="ml-3">
                                       <h5 class="font-bold">Marco Borghi</h5>

                                   </div>
                               </div>

                               <div>
                                   <a href="{{route('showAggiungiServizio')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-red-700 hover:bg-red-800 rounded-full py-2 px-8"
                                   >
                                       See Now
                                   </a>
                               </div>
                           </footer>
                       </div>
                   </div>
               </article>
           </div>
           @if (session()->has('success'))
                <div class="fixed bg-blue-500 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-sm">
                    <p>{{ session('success') }}</p>
                </div>

            @endif
       </main>
</x-layout>

<style>
    body{
        background-color:rgb(239, 74, 74);
    }
    .text-3xl{
        border-bottom: 3px solid rgb(190, 3, 3);
    }
    #api_img{

    height:400px;
    width: 500px;
    }

</style>
