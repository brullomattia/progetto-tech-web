<?php $posts=App\Models\Post::all();?>
<x-layout>

    <!doctype html>

    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">
            

            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <div id="backToServices" class="hidden lg:flex justify-between mb-6">
                            <a href="/services"
                                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                        </path>
                                        <path class="fill-current"
                                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>

                                Back to Services Page
                            </a>
                       </div>
  
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                        

                   

                    <div class="col-span-8">
                        <div id = "image1" class="col-span-4 lg:text-center lg:pt-14 mb-10">
                            <img src="https://www.crownfrenchfurniture.co.uk/media/catalog/product/cache/eb2ff8990549e78d94590201ad29eed1/l/o/louis_french_showcase_with_cupboard.jpg" alt="" class="rounded-xl">

                        </div>
                        
                        <div id = "text1" class="space-y-4 lg:text-lg leading-loose">
                            <h1 class="font-semi-bold text-3xl lg:text-4xl mb-10">
                                Veterinario
                            </h1>

                        
                            In questa pagina è possibile condividere immagini e aneddoti riguardanti gli animali con gli altri utenti del portale, apprestati a dire la tua!
                        </div>

                        <div id = "image2" class="col-span-4 lg:text-center lg:pt-14 mb-10">
                            <img src="https://www.crownfrenchfurniture.co.uk/media/catalog/product/cache/eb2ff8990549e78d94590201ad29eed1/l/o/louis_french_showcase_with_cupboard.jpg" alt="" class="rounded-xl">

                        </div>
                        
                        <div id = "text2" class="space-y-4 lg:text-lg leading-loose">
                            <h1 class="font-semi-bold text-3xl lg:text-4xl mb-10">
                                Bacheca Animal House
                            </h1>

                        
                            In questa pagina è possibile condividere immagini e aneddoti riguardanti gli animali con gli altri utenti del portale, apprestati a dire la tua!
                        </div>
                    </div>

                    <section class="col-span-12 mx-2.5">
                        @auth
                            @include('form.showcase_form')
                            <div class="lg:grid lg:grid-cols-1 ">
                                @foreach($posts as $post)
                                    <x-showcase_post :post="$post" />
                                    <div></div>
                                @endforeach
                            </div>
                            
                        @endauth

                        </form>


                        
                        
                    </section>
                </article>
            </main>

            
        </section>
    </body>
</x-layout>
<style>


    body{
        
        background-color:#F0ACE2;
        }
    #backToServices{
       margin-left:35%;
        
        }
        .col-span-8{
            margin-left:27%;
            width:100%;
            display: grid;
	        grid-template-columns: 1fr 1fr 1fr;
	        grid-template-areas: "image1 text1 text1"
                                 "text2 text2 image2"
        }
        #text1{
            padding:7%;
            grid-area: text1;
        }

        #text2{
            padding:7%;
            grid-area: text2;
        }
        #image2{
            grid-area: image2;
        }
        #image1{
            grid-area: image1;
        }
       
</style>