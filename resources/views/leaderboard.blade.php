<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;

$memoryUsers= DB::table('users')->orderBy('memory_points','desc')->get();
$quizUsers= DB::table('users')->orderBy('quiz_points','desc')->get();

?>
<x-layout>
    <h1 class="text-4xl">
        LeaderBoard<span class="text-blue-500"> Memory Points </span> 
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
                    
                    <td class="border px-4 py-2">{{ $user->username }}</td>
                    <td class="border px-4 py-2">{{ $user->memory_points }}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

<h1 class="text-4xl">
    LeaderBoard<span class="text-blue-500"> Quiz Points </span> 
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
            @foreach($quizUsers as $user)
                <tr>
                    
                    <td class="border px-4 py-2">{{ $user->username }}</td>
                    <td class="border px-4 py-2">{{ $user->quiz_points }}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>




</x-layout>