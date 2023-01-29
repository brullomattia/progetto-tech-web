<?php
  use App\Http\Controllers\ApiController;

  $count= 4;
  $animal= new ApiController;

  $animal1= new ApiController;
  $animal1= $animal1->getAnimal(rand(1,30));
  $animal2= new ApiController;
  $animal2= $animal2->getAnimal(rand(1,30));
  $animal3= new ApiController;
  $animal3= $animal3->getAnimal(rand(1,30));
  $animal4= new ApiController;
  $animal4= $animal4->getAnimal(rand(1,30));

  $animal= array($animal1,$animal2,$animal3,$animal4);


  $animal2= $animal;
  shuffle($animal2);


?>


<x-layout>
<div>
  <h1 class="font-semibold"> Punteggio : <p id="score">0</p> </h1>
  <h1 class="font-semibold"> Mosse : <p id="move">0</p> </h1>
</div>
<div class="container">
  <div class="cards">


    @for($i=0; $i<$count; $i++)

      <div class="card" animal="{{$animal[$i]->name}}">
        <img src="{{$animal[$i]->image_link}}" alt="" />
      </div>

      <div class="card" animal="{{$animal2[$i]->name}}">
        <img src="{{$animal2[$i]->image_link}}" alt="" />
      </div>
    @endfor
  </div>


    <a href=" {{route('memory')}}" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
      Restart Game!

    </a>


    @auth
    <a id="btn" href=" {{route('update.memory')}}" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10 hidden=true" >
      You win, add point to Leaderboard!

    </a>
    @endauth

    @guest
    <a id="btn" href=" {{route('login')}}" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10 hidden=true" >
      You win, login for update leaderboard!

    </a>
    @endguest
</div>

<script>

let counter = 0;
let firstSelection = "";
let secondSelection = "";
var score = 0;
var move = 0;
const cards = document.querySelectorAll(".cards .card");
cards.forEach((card) => {
  card.addEventListener("click", () => {
    card.classList.add("clicked");

    if (counter === 0) {
      firstSelection = card.getAttribute("animal");
      counter++;
    } else {
      secondSelection = card.getAttribute("animal");
      counter = 0;

      if (firstSelection === secondSelection) {
        const correctCards = document.querySelectorAll(
          ".card[animal='" + firstSelection + "']"
        );

        correctCards[0].classList.add("checked");
        correctCards[0].classList.remove("clicked");
        correctCards[1].classList.add("checked");
        correctCards[1].classList.remove("clicked");

        if(score<8){
          score=score+2;
          document.getElementById('score').textContent = score;

        }
        if(score<8){
          move++;
          document.getElementById('move').textContent = move;
        }
        if(score===8)
        document.getElementById('btn').style.visibility= 'visible';

      } else {
        const incorrectCards = document.querySelectorAll(".card.clicked");

        incorrectCards[0].classList.add("shake");
        incorrectCards[1].classList.add("shake");

        setTimeout(() => {
          incorrectCards[0].classList.remove("shake");
          incorrectCards[0].classList.remove("clicked");
          incorrectCards[1].classList.remove("shake");
          incorrectCards[1].classList.remove("clicked");
        }, 800);
        if(score<=8){
          move++;
          document.getElementById('move').textContent = move;
        }
      }
    }
  });
});

</script>



<style>
    body{
        background-color: #FFEC8B	;
    }
    .cards{
        padding:7%;
        background-image:url('https://media.tenor.com/yyTPHle1YdQAAAAC/homer-brain.gif');
        background-repeat: no-repeat;
        background-size: cover;
    }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  #btn {
    visibility: hidden;
  }

  .container {
    display: grid;
    place-items: center;
    max-inline-size: none;

  }

  .heading {
    text-align: center;
    font-family: "Poppins", sans-serif;
    font-size: 2rem;
    font-weight: 500;
  }

  .cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2em;
  }

  .card {
    height: 180px;
    width: 130px;
    background-color: #B8860B				;
    border-radius: 10px;
    display: grid;
    place-items: center;
    cursor: pointer;
    transition: 0.3s all ease;
  }

  .card:hover {
    transform: scale(1.03);
  }

  .card img {
    width: 80%;
    max-height: 90px;
    opacity: 0;
    transition: 0.3s all ease;
  }

  .card.clicked {
    background-color: orange;
  }

  .card.checked {
    background-color: lightgreen;
  }

  .card.clicked img,
  .card.checked img {
    opacity: 1;
    pointer-events: none;
  }

  .card.shake {
    background-color: #f15f5f;
    animation: shake 0.5s;
  }

  @keyframes shake {
    0% {
      transform: translate(1px, 1px) rotate(0deg);
    }
    10% {
      transform: translate(-1px, -2px) rotate(-1deg);
    }
    20% {
      transform: translate(-3px, 0px) rotate(1deg);
    }
    30% {
      transform: translate(3px, 2px) rotate(0deg);
    }
    40% {
      transform: translate(1px, -1px) rotate(1deg);
    }
    50% {
      transform: translate(-1px, 2px) rotate(-1deg);
    }
    60% {
      transform: translate(-3px, 1px) rotate(0deg);
    }
    70% {
      transform: translate(3px, 1px) rotate(-1deg);
    }
    80% {
      transform: translate(-1px, -1px) rotate(1deg);
    }
    90% {
      transform: translate(1px, 2px) rotate(0deg);
    }
    100% {
      transform: translate(1px, -2px) rotate(-1deg);
    }
  }
</style>



</x-layout>
