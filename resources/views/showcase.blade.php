<?php $posts=App\Models\Post::all();?>
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


                    <div class="col-span-12 mx-2.5" id="intro">
                        <div class="top">

                            <div id="backtohome">
                                <a href=" {{route('home_front')}}"  class="bg-red-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
                            Back to home page!

                                </a>
                            </div>
                        </div>
                        <div class="center">
                                <h1 class="title">
                                    Bacheca Animal House
                                </h1>

                                <div class="space-y-4 lg:text-lg leading-loose">
                                    In questa pagina è possibile condividere immagini e aneddoti riguardanti gli animali con gli altri utenti del portale, apprestati a dire la tua!
                                </div>
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
</x-layout2>
<style>

 body{
    background-image:url('/images/bacheca.jpg');
    background-size: contain;

}
.title {
    font-size:25px;
    font-weight:bold;
    border-bottom:2px solid rgb(190, 3, 3);;
    color:rgb(190, 3, 3);
}
.top{
            flex:1;
            text-align: center;
            margin-bottom:3%;
        }
.center{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    margin:1%;
    padding:3%;
    background: rgba(255, 255, 255, 0.7);

}
</style>
