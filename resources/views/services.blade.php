
<x-layout>
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
           

           <div class="lg:grid lg:grid-cols-2">
               

                       
               <article
                   class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                   <div class="py-6 px-5">
                       <div>
                           <img src="https://www.toelettatori.it/wp-content/uploads/2017/06/corsi-toelettatura-cani-gatti-riconosciuti.jpg" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>
                       

                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href=" {{route('showToelettatura')}}">Toelettatura</a>
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
                                       <h5 class="font-bold">Marco Borghi</h5>
                                       
                                   </div>
                               </div>

                               <div>
                                   <a href="{{route('showToelettatura')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                   >
                                       See Now
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
                           <img src="https://www.zooplus.it/magazine/wp-content/uploads/2020/06/dog-sitter.jpeg" alt="Blog Post illustration" class="rounded-xl" id="api_img" >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>
                               

                               <div class="mt-4">
                                   <h1 class="text-3xl" >
                                   <a href=" {{route('showDogSitter')}}">Dog Sitter</a>
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
                                   <a href=" {{route('showDogSitter')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                   >
                                       See Now 
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
                           <img src="https://www.zooplus.it/magazine/wp-content/uploads/2017/03/fotolia_132644817-768x513.jpg" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>
                       

                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href="{{route('showVeterinario')}}">Veterinario</a>
                                   </h1>

                                  
                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione troverete tutti i servizi offerti dalla nostra Azienda!
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
                                   <a href="{{route('showVeterinario')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                   >
                                       See Now
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
                           <img src="https://fma.memberbenefits.com/wp-content/uploads/sites/10/2019/02/adorable-3344414_SFW.png" alt="Blog Post illustration" class="rounded-xl" id="api_img"  >
                       </div>

                       <div class="mt-8 flex flex-col justify-between">
                           <header>
                       

                               <div class="mt-4">
                                   <h1 class="text-3xl">
                                   <a href="{{route('showVisitaDomicilio')}}">Visita a domicilio per animali soli</a>
                                   </h1>

                                  
                               </div>
                           </header>

                           <div class="text-sm mt-4">
                               <p>
                                   In questa sezione troverete tutti i servizi offerti dalla nostra Azienda!
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
                                   <a href="{{route('showVisitaDomicilio')}}"
                                      class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
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
        
        background-color:#F0ACE2;
        }
</style>