<?php
  use App\Http\Controllers\ApiController;


  $count= 4;
  $animal= new ApiController;
  $animal= $animal->getAnimals();
  shuffle($animal);
  
  
?>

<x-layout>



        

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
           

            <div class="lg:grid lg:grid-cols-2">
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="{{$animal[0]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <a href=" {{route('animal_video')}}">Video divertenti sugli animali</a>
                                    </h1>

                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    In questa sezione troverete compilations di video divertenti sugli animali,
                                    morirai dal ridere!
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
                                    <a href=" {{route('animal_video')}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        See Videos
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="{{$animal[1]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                    <a href=" {{route('curiosity')}}">Curiosità sugli animali!</a>
                                    </h1>


                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labor.
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
                                    <a href=" {{route('curiosity')}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        Read More
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="{{$animal[2]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img" >
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                        

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        Quiz sugli animali!
                                    </h1>

                                   
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    Gioca al quiz, indovina 3 risposte di fila e aggiudicati 10 punti per scalare la Classifica!
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
                                    <a href="{{route('quiz')}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        Play Now
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="{{$animal[3]->image_link}}" alt="Blog Post illustration" class="rounded-xl" id="api_img">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                

                                <div class="mt-4">
                                    <h1 class="text-3xl" >
                                    <a href=" {{route('memory')}}">Memory Game!</a>
                                    </h1>

                                    
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    MEMORY è un gioco di carte semplice e divertente che stimola lo sviluppo della memoria.
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
                                    <a href=" {{route('memory')}}"
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        Play Now 
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

</style>