<?php $users=App\Models\User::all();?>
<x-layout2>

    <!doctype html>

    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">


            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6" id="main">
                <article >


                    <div class="top">

                        <div id="backtohome">
                            <a href=" {{route('home_admin')}}"  class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
                        Back to admin home page!

                            </a>
                        </div>
                    </div>

                    <table class="table-auto w-full mb-6" id="table">
                        <thead>
                            <tr>

                                <th class="px-4 py-2">Username</th>
                                <th class="px-4 py-2">email</th>
                                <th class="px-4 py-2">Memroy Points</th>
                                <th class="px-4 py-2">Quiz Points</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            @if ($user->email != 'admin@mail.it')
                                <tr>

                                    <td class="border-2 border-green-800 px-4 py-2">{{ $user->username }}</td>
                                    <td class="border-2 border-green-800 px-4 py-2">{{ $user->email }}</td>
                                    <td class="border-2 border-green-800 px-4 py-2">{{ $user->memory_points }}</td>
                                    <td class="border-2 border-green-800 px-4 py-2">{{ $user->quiz_points }}</td>
                                    <td class="border-2 border-red-700 px-4 py-2 " id="delete">
                                        <a href=" {{route('delete.user', $user->id)}}" class="btn">Delete</a></td>
                                    <td class="border-2 border-green-800 px-4 py-2" id="edit">
                                        <a href=" {{route('edit_user', [$user->id])}}" class="btn" >Edit</a></td>

                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>


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

    body{

    background-color: #C1FFC1	;
    }
    .top{
            flex:1;
            text-align: center;
            margin-bottom:2%;

        }
        #table{
            flex:1;
        }
        #main{
            display: flex;
	flex-direction: column;
	flex-wrap: wrap;
        }
        #edit{

            margin:0px;
            padding:0px;
            background-color:rgb(6, 97, 54);
            padding-left:1%;


        }


        #delete {

        margin:0px;
        padding:0px;
        background-color:rgb(185, 8, 8);
        padding-left:1%;


}


        .btn{
            color:white;

            border:0px;

        }
</style>

