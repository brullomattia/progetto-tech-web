<?php $services=App\Models\Service::all();


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
                <div class="top">

                        <div id="backtohome">
                            <a href=" {{route('home_front')}}"  class="bg-red-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
                        Back to home page!

                            </a>
                        </div>
                  </div>
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">





                    <section class="col-span-12 mx-2.5" id="list">
                        @auth

                            <div class="lg:grid lg:grid-cols-1 ">
                                @foreach($services as $service)
                                @if( $service->approved==true)
                                    <x-display_services :service="$service" />
                                    <div></div>
                                @endif
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

.top{
            text-align: center;
            margin-bottom:2%;
        }
        body{
    background-image:url('/images/dogSitter.jpg');
    background-repeat:repeat;
    background-size: cover;
}
    </style>

