
<x-layout2>


        <div class="contenitore">
            <div class="top">

                <div id="backtohome">
                    <a href=" {{route('home_game')}}"  class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
                Back to home page!

                    </a>
                </div>
          </div>
        <div id="buttonDiv">
        <button id="start" onclick="start()" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                START !
        </button>
        <button id="catFacts" onclick="getCats()" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Cat you didn't impress me...
        </button>
            <button id="dogFacts" onclick="getDogs()" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
            Tell me something i dont know D(AW)G!
        </button>
        </div>



        <div class="imgDiv">
                <div id="cat" class="imgAndBaloon">
                    <p class= "baloon" id= "baloonCat"  >
                    The thing I'm about to tell you is so interesting that you will become interesting too...
                    </p>
                    <img id="imgCat" class="img" src="images/funnyCat.jpg">
                </div>

                <div id="dog" class="imgAndBaloon">
                    <p class= "baloon" id= "baloonDog" >
                        I invented fun facts. It's true. Wikipedia that.
                    </p>
                    <img id="imgDog" class="img" src="images/funnyDog.jpg">
                </div>
        </div>


    </div>

<script>
         async function getDogs() {
            let request = new XMLHttpRequest();
            request.open("GET","https://dogapi.dog/api/facts" , true);
            request.send();
            request.onload = () => {
                if (request.status == 200) {
                    var animalJSON = JSON.parse(request.response);
                    var fact = animalJSON['facts'];
                    document.getElementById('baloonDog').textContent = fact;
                } else {
                console.log(`error ${request.status} ${request.statusText}`)
                }
             }
        }

        async function getCats() {
            let request = new XMLHttpRequest();
            request.open("GET","https://meowfacts.herokuapp.com/" , true);
            request.send();
            request.onload = () => {
                if (request.status == 200) {
                    var animalJSON = JSON.parse(request.response);
                    var fact = animalJSON['data'];
                    document.getElementById('baloonCat').textContent = fact;
                } else {
                console.log(`error ${request.status} ${request.statusText}`)
                }
           }
        }

        async function start() {
           document.getElementById('start').style.display = 'none';
           document.getElementById('catFacts').style.display = 'flex';
           document.getElementById('dogFacts').style.display = 'flex';
           document.getElementsByTagName('body')[0].style.backgroundImage="url('images/guys.gif')" ;
           document.getElementsByTagName('body')[0].style.backgroundRepeat="repeat";
           getCats();
           getDogs();
        }

</script>
</html>

</x-layout2>

<style>

        body {

       background-image: url('images/graffiti.jpg');
        background-size: cover;
        height: 50%;
        }

        #contenitore {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 5px;
        }
        .top{
            text-align: center;
            margin-bottom:2%;
        }

        .img {
        border: 3px solid green;
        border-radius: 20px;
        margin-top:5%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));

        }
        .imgAndBaloon {
            flex: 1;
            margin:3%;
        }

        .imgDiv {
            display: flex;
	        flex-direction: row;
	        flex-wrap: wrap;
            margin: auto;
            margin-left:12%;
            margin-right:12%;
            padding: 5px;

        }

        #buttonDiv {
        display: flex;
        text-align: center;
        margin: auto;
        justify-content: center;
        flex-direction: row;
        gap: 5px;
        }


        p {
        display: inline-block;
        color: black;
        }

        #catFacts , #dogFacts{
            display:none;
        }



   .baloon{

        position: relative;
	    max-width: 30em;
	    background-color: lightblue;
	    padding: 1.125em 1.5em;
	    font-size: 1.25em;
	    border-radius: 1rem;
        box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    }

    .baloon::before {

        content: '';
	    position: absolute;
	    width: 0;
	    height: 0;
	    top: 100%;
	    right: 1.5em;
	    border: .75rem solid transparent;
	    border-bottom: none;
        border-top-color: lightblue;
        filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0, 0, 0, 0));
    }
</style>
