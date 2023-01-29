<?php $users=App\Models\User::all();?>
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
                            <a href="/home_admin"
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

                                Back to Home Admin Page
                            </a>


                        </div>


                    </div>

                    <section class="col-span-12 mx-2.5" id="list">
                        @auth

                            <div class="lg:grid lg:grid-cols-1 ">
                                @foreach($users as $user)
                                    @if ($user->email != 'admin@mail.it')
                                        <x-display_user :user="$user" />
                                        <div></div>
                                    @endif

                                @endforeach
                            </div>

                        @endauth

                        </form>
                    </section>
                </article>
            </main>
            @if (session()->has('success'))
                <div class="fixed bg-blue-500 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-sm">
                    <p>{{ session('success') }}</p>
                </div>
                
            @endif

        </section>
    </body>
</x-layout>
<style>

    body{
    /*background-color: #C1FFC1	;*/
    background-image:url('https://img.pixers.pics/pho_wat(s3:700/FO/60/41/55/53/700_FO60415553_842615bcb1b9fb7e97aa3a692dece3ea.jpg,700,467,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,417,jpg)/adesivi-prato-verde-e-blu-cielo.jpg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>

