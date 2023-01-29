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
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">


                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/home_front"
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

                                Back to HomeFront Page
                            </a>


                        </div>

                        <h1 class="font-semi-bold text-3xl lg:text-4xl mb-10">
                            Bacheca Animal House
                        </h1>

                        <div class="space-y-4 lg:text-lg leading-loose">
                            In questa pagina è possibile condividere immagini e aneddoti riguardanti gli animali con gli altri utenti del portale, apprestati a dire la tua!
                        </div>
                    </div>
                    <section class="col-span-12 mx-2.5">
                        @auth

                            <div class="lg:grid lg:grid-cols-1 ">
                                @foreach($posts as $post)
                                    <x-showcase_post_management :post="$post" />
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
