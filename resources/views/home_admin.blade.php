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
                   class="transition-colors duration-300 hover:bg-green-300  border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="{{$animal[0]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>


                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href=" {{route('showUsers_management')}}">Anagrafica clienti</a>
                                   </h1>


                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione  è possibile visualizzare e gestire le informazioni degli utenti del sito.
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
                                   <a href="{{route('showServices_management')}}"
                                      class="bg-green-400 duration-300 text-xs font-semibold hover:bg-green-500  rounded-full py-2 px-8"
                                   >
                                       See Now
                                   </a>
                               </div>
                           </footer>
                       </div>
                   </div>
               </article>

               <article
                   class="transition-colors duration-300 hover:bg-green-300 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="{{$animal[1]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img" >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>


                               <div class="mt-4">
                                   <h1 class="text-3xl" >
                                   <a href=" {{route('showServices_management')}}">Gestione Annunci di Lavoro</a>
                                   </h1>


                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                In questa sezione è possibile visualizzare, approvare ed eliminare gli annunci di lavoro.
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
                                   <a href=" {{route('showShowcase')}}"
                                      class="bg-green-400 duration-300 text-xs font-semibold hover:bg-green-500  rounded-full py-2 px-8"
                                   >
                                       See Now
                                   </a>
                               </div>
                           </footer>


                       </div>
                   </div>
               </article>

            <article
               class="transition-colors duration-300 hover:bg-green-300 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
               <div class="py-6 px-5">
                   <div>
                       <img src="{{$animal[2]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img" >
                   </div>

                   <div class="mt-8 flex flex-col justify-between">
                       <header>


                           <div class="mt-4">
                               <h1 class="text-3xl" >
                               <a href=" {{route('showShowcase_management')}}">Gestione Bacheca</a>
                               </h1>


                           </div>
                       </header>

                       <div class="text-sm mt-4">
                           <p>
                             In questa sezione è possibile gestire la bacheca di AnimalHouse.
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
                               <a href=" {{route('showShowcase_management')}}"
                                  class="bg-green-400 duration-300 text-xs font-semibold hover:bg-green-500  rounded-full py-2 px-8"
                               >
                                   See Now
                               </a>
                           </div>
                       </footer>


                   </div>
               </div>
           </article>


           </div>

       </main>
</x-layout>

<style>

    #api_img{

    height:400px;
    width: 500px;
    }
    body{
    background-color: #C1FFC1	;
    }
</style>
