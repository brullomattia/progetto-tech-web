<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;

$memoryUsers= DB::table('users')->orderBy('memory_points','desc')->get();
$quizUsers= DB::table('users')->orderBy('quiz_points','desc')->get();

?>
<x-layout2>
    <div class="top">

        <div id="backtohome">
            <a href=" {{route('home_front')}}"  class="bg-red-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
        Back to home page!

            </a>
        </div>
    </div>
    <h1 class="text-4xl">
        LeaderBoard<span class="text-red-800"> Memory Points </span>
    </h1>
<div>

    <table class="table-auto w-full mb-6">
        <thead>
            <tr>

                <th class="px-4 py-2">Username</th>
                <th class="px-4 py-2">Points</th>

            </tr>
        </thead>
        <tbody>
            @foreach($memoryUsers as $user)
                <tr>

                    <td class="border-2 border-red-800 px-4 py-2">{{ $user->username }}</td>
                    <td class="border-2 border-red-800 px-4 py-2">{{ $user->memory_points }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

<h1 class="text-4xl">
    LeaderBoard<span class="text-red-800"> Quiz Points </span>
</h1>

<div>

    <table class="table-auto w-full mb-6" id="table">
        <thead>
            <tr>

                <th class="px-4 py-2">Username</th>
                <th class="px-4 py-2">Points</th>

            </tr>
        </thead>
        <tbody>
            @foreach($quizUsers as $user)
                <tr>

                    <td class="border-2 border-red-800 px-4 py-2">{{ $user->username }}</td>
                    <td class="border-2 border-red-800 px-4 py-2">{{ $user->quiz_points }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>




</x-layout2>
<style>
 .top{
            flex:1;
            text-align: center;
            margin-bottom:2%;
        }

        body{
        background-color:rgb(239, 74, 74);
    }
    </style>
