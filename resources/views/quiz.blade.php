<?php use App\Http\Controllers\ApiController; 


function createMatrix(){
    $nomiAnimali = array('Cat','Dog','Wolf','Mouse','Parrot','Rabbit','Hamster','Chicken','Cow','Horse','Lion','Tiger',
        'Leopard','Jaguar','Octopus','Camel','Shark','Duck','Eagle','Snake','Bear','Fox');
    $risposte=array();    
    shuffle($nomiAnimali);
    $i=0;
    $j=0;
       do {
                $animal= new ApiController;
                $animal= $animal-> getNinjasAnimals($nomiAnimali[$j]);
                if($i==0){
                    $empty1 = array('img',' ',' ',' ',' ',' ',' ','insectivorous');
                    $empty2 = array('img',' ',' ',' ',' ',' ',' ',' ');
                    $empty3 = array('img',' ',' ',' ',' ',' ',' ',' ');
                    array_push($risposte,$animal);array_push($risposte,$empty1);array_push($risposte,$empty2);array_push($risposte,$empty3);
                }
                else{
                    $risposte = fillMatrix($risposte,$animal);
                }
                
                if($j==21){$j=0;}else{$j++;}
                $i++;
                
                
        } while (!isFull($risposte));
        stampa($risposte);


        $animalImg= new ApiController;
        $animalImg= $animalImg-> getGoogleImage($risposte[0][1]);
        $risposte[0][0]=$animalImg;
         return  $risposte;
}

function fillMatrix($m,$a){ 
        for ($i = 1;  $i<=7 ; $i ++) {
                $giaPresente=false;
                for ($j = 0;  $j<4 ; $j ++) {
                    if($m[$j][$i]==$a[$i]){
                        $giaPresente=true;  
                    }
                }
                if(!$giaPresente){
                    for ($j = 0;  $j<4; $j ++) {
                        if(($m[$j][$i]==' ')&&($a[$i]!=' ')){
                            $m[$j][$i]=$a[$i]; 
                            $a[$i]=' ';
                            
                        }
                    } 
                }
        }
        return $m;
    
}
             
function stampa($m){
           for ($j = 0;  $j<count($m) ; $j ++) {
            echo "<script>console.log('nuova riga ');</script>";
            for ($i = 1;  $i<=7 ; $i ++) {
                echo "<script>console.log('".$m[$j][$i]."');</script>";
                
            }
        }
        
}
function isFull($m){
    $result= True;
           for ($j = 0;  $j<count($m) ; $j ++) {
            for ($i = 1;  $i<=7 ; $i ++) {
             if($m[$j][$i]==' '){
                $result = false;
                break;
             }
                
            }
        }
        return $result;
}
$risposte = createMatrix();

?>

<x-layout>
 

        <div class="contenitore"> 
        <div id="finishGame">
            
            <a id="reload" href=" {{route('quiz')}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Game Over Try Again!
            </a>
            <a id="exit" href=" {{route('memory')}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Try Memory Game!
            </a>
        </div>

        <div id="winGame">
            @auth
            <a id="reload" href=" {{route('update.quiz')}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Congratulation you guessed 3/3 add 10Points to Leaderboard
            </a>
            <a id="exit" href=" {{route('memory')}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Try Memory Game!
            </a>
            @endauth

            @guest
            <a id="reload" href=" {{route('login')}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Congratulation you guessed 3/3 Login to add point on LeaderBoard!
            </a>
            <a id="exit" href=" {{route('memory')}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-5 hidden=true" >
                Try Memory Game!
            </a>
            @endguest
        </div>

       <div id="core">
            
            <div id="punteggio">
                <p class=" text-xl my-2">Risposte corrette:</p>
                <p id="NumMosse">0</p>
            </div>
            <div class="domanda">
                <img id="img" src="">
            </div>
            <div>
            <p id="domandaCorrente" class="font-semibold"></p>

            </div>
            <div id="scelte">
                <p id="primo" onclick="rispostaSelezionata(id)"></p>
                <p id="secondo" onclick="rispostaSelezionata(id)"></p>
                <p id="terzo" onclick="rispostaSelezionata(id)"></p>
                <p id="quarto" onclick="rispostaSelezionata(id)"></p>
            </div>
       </div>

       
        
       
       <!-- 
       <div class="domanda">
            <button onclick="next()" id="continua">Continua</button>
       </div>
        -->
    </div>

<script>
            //var risposta0, risposta1, risposta2, risposta3;
        var arrDomande = ["What is the name of this animal?", "What is the lifespan of this animal?", "What is the maximum length of this animal ?", "What is the maximum weight of this animal?", 
        "What is the habitat of this animal?", "What are/is the geographic location of this animal?", "What is the diet of this animal?"];
        var arrRisposte = [];
        var arrRisposteIni = [];
        var i = 0;
        var id = [];
        var tentataRisp = false;
        var score = 0;
        var animalJSON = <?php echo json_encode($risposte); ?>;
        
        async function test($string){
            for (var i = 0;  i<=3 ; i ++) {
                console.log('Nuovo animale js dentro '+$string);
                for (var j = 0;  j<=7 ; j ++) { 
                    console.log(animalJSON[i][j]);
                
        
            }}
        }
        
        animalRequest(0);
        document.getElementById('finishGame').style.display = 'none';
        document.getElementById('winGame').style.display = 'none';
        
        async function next(){
            console.log('i vale '+ i);
            console.log('externalIndex vale '+ externalIndex);
            test('next');
            animalRequest(i);
            tentataRisp = false;
        }

        async function animalRequest(i) {
            console.log('iterazione animalRequest() dove i vale '+ i);
             animalPresent(animalJSON, i);       
        }

        var externalIndex;

        async function animalPresent(animalJSON, i) {
            
            var diverso = true;
            if(i == 0){
                document.getElementById("img").src= animalJSON[i][0];
                //prendere una domanda casuale dall' array di domande
                var lunghezza = arrDomande.length - 1;
                var index = Math.floor(Math.random() * lunghezza);
               //inserirla nel paragrafo domandaCorrente
                document.getElementById('domandaCorrente').textContent = arrDomande[index];
                externalIndex = index;
                //console.log('externalIndex vale '+ externalIndex);
                test('animalpresent=0');
            }
            if(i == 3){ test('animalpresenti=3');}
            //mettere in  arrRisposteIni[] alla prima posizione la risposta giusta alla domanda selezionata
            switch(externalIndex){
                case 0:
                    arrRisposteIni[i] = animalJSON[i][1];
                    break;
                case 1:
                    arrRisposteIni[i] = animalJSON[i][2];
                    break;
                case 2:
                    arrRisposteIni[i] = animalJSON[i][3];
                    break;
                case 3:
                    arrRisposteIni[i] = animalJSON[i][4];
                    break;
                case 4:
                    arrRisposteIni[i] = animalJSON[i][5];
                    break;
                case 5:
                    arrRisposteIni[i] = animalJSON[i][6];
                    break;
                case 6:
                    arrRisposteIni[i] = animalJSON[i][7];
                    break;  
            }

            //se esiste almeno una risoposta in arrRisposte, che è uguale alla risposta corrente in arrRisposteIni
            for(var j = 0; j < arrRisposte.length; j++){
                if(arrRisposte[j] == arrRisposteIni[i]){
                    console.log('arrRisposte[j] == arrRisposteIni[i] ->'+ arrRisposte[j]+"="+ arrRisposteIni[i]);
                    diverso = false;
                    break;
                }
            }
           // ora la risposta giusta è presente anche in arrRisposte[]
            if(diverso){
                arrRisposte[i] = arrRisposteIni[i];
            }

            if(i == 3){
                assegnaRisposta(); 
            } 
            
            if(diverso){
                i++;
            }

            if(i<=3){
                animalRequest(i);}
        }


        //mettere gli elementi in arrRisposteIni[0] nel file html, in modo casuale, si fa quando i = 3  
        async function assegnaRisposta(){
            var arr = [];
            var index = 0; 
            //mi salvo le posizioni in un array metto dei numeri casuali da 1 a 4 nell' array
            while(index < 4){
                var random = Math.floor(Math.random() * 4);
                if(!arr.includes(random)){
                    arr[index] = random;
                    index++;
                }
            }

            //qui metto all'elemeto di valore 0 l'id primo così che sarà sempre asseganto allo 0 indipendentemente dalla sual posizione nell'array
            for(var i = 0; i < arr.length; i++){
                switch(arr[i]){
                    case 0:
                        id[i] = "primo";
                        break;
                    case 1:
                        id[i] = "secondo";  
                        break;
                    case 2:
                        id[i] = "terzo";
                        break;
                    case 3:
                        id[i] = "quarto";
                        break;
                }
            }

            document.getElementById('primo').style.backgroundColor = '';
            document.getElementById('secondo').style.backgroundColor = '';
            document.getElementById('terzo').style.backgroundColor = '';
            document.getElementById('quarto').style.backgroundColor = '';
            document.getElementById(id[0]).textContent = arrRisposteIni[0];
            document.getElementById(id[1]).textContent = arrRisposteIni[1];
            document.getElementById(id[2]).textContent = arrRisposteIni[2];
            document.getElementById(id[3]).textContent = arrRisposteIni[3];
        }

        function rispostaSelezionata(idCorrente){
            if(!tentataRisp){
                if(document.getElementById(idCorrente).textContent == arrRisposteIni[0]){
                    //risposta giusta 
                    document.getElementById(idCorrente).style.backgroundColor = 'rgb(1, 195, 1)';
                    score++;
                    document.getElementById('NumMosse').textContent = score;
                
                    if(score==3){
                        document.getElementById('winGame').style.display = 'flex';
                    }else{
                        setTimeout(() => {
                    next();
                    }, 1000);
                    }
                }
                else{
                    //risposta sbagliata 
                    document.getElementById(idCorrente).style.backgroundColor = 'red';
                    document.getElementById(id[0]).style.backgroundColor = 'rgb(1, 195, 1)';
                    document.getElementById('finishGame').style.display = 'flex';
                   // document.getElementById('gameOver').style.display = 'block';
                    document.getElementById('NumMosse').value = score;
                    //document.getElementById('NumMosse').style.display = 'none';
                } 
            }
            tentataRisp = true;
        }
 
</script>
</html>
    
</x-layout>

<style>
   
        body {
        
        
        background-repeat: no-repeat;
        background-size: cover;
        height: 50%;
        /* width: 100%; */
        }



        a {
        text-decoration: none;
        }

        #contenitore {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 5px;
        }

        #scelte {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        width: 50%;
        gap: 5px;
        justify-content: center;
        text-align: center;
        margin: auto;
        margin-top: 20px;
        }



        #scelte > p {
        /* background-color: yellow; */
        padding: 5px;
        border: 3px solid cornflowerblue;
        border-radius: 5px;
        }

        #img {
        width: 500px;
        height: 500px;
        border: 3px solid cornflowerblue;
        border-radius: 20px;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
        }

        .domanda {
        margin: auto;
        /* width: 50%; */
        padding: 5px;
        text-align: center;
        }

        #finishGame {
        display: flex;
        text-align: center;
        margin: auto;
        justify-content: center;
        flex-direction: row;
        gap: 5px;
        }

        #winGame {
        display: flex;
        text-align: center;
        margin: auto;
        justify-content: center;
        flex-direction: row;
        gap: 5px;
        }

        input {
        margin-top: 1%;
        width: 170px;
        height: 50px;
        /* background-color: yellow; */
        border: 3px solid orange;
        border-radius: 20px;
        }

        p {
        display: inline-block;
        color: black;
        }

        #core {
        display: flex;
        flex-direction: column;
        text-align: center;
        }

        #NumMosse {
       /* display: none;*/
        }
</style>
