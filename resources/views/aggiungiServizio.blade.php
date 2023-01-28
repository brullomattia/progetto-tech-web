<?php $posts=App\Models\Post::all();
$user = (Auth::User())->toArray();
$name = Auth::user()->username;
$email = Auth::user()->email;
?>

<x-layout>

    <!doctype html>

    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">
            

            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <div id="backToServices" class="hidden lg:flex justify-between mb-6">
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

                                Back to Home Front
                            </a>
                       </div>
  
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                        

                   

                    <div class="col-span-8">
                        <div id = "image1" class="col-span-4 lg:text-center lg:pt-14 mb-10">
                            <img src="https://www.crownfrenchfurniture.co.uk/media/catalog/product/cache/eb2ff8990549e78d94590201ad29eed1/l/o/louis_french_showcase_with_cupboard.jpg" alt="" class="rounded-xl">

                        </div>
                        
                        <div id = "text1" class="space-y-4 lg:text-lg leading-loose">
                            <h1 class="font-semi-bold text-3xl lg:text-4xl mb-10">
                                Aggiungi servizio
                            </h1>

                        
                            In questa pagina è possibile condividere immagini e aneddoti riguardanti gli animali con gli altri utenti del portale, apprestati a dire la tua!
                        </div>

                        <div id = "image2" class="col-span-4 lg:text-center lg:pt-14 mb-10">
                            <img src="https://www.crownfrenchfurniture.co.uk/media/catalog/product/cache/eb2ff8990549e78d94590201ad29eed1/l/o/louis_french_showcase_with_cupboard.jpg" alt="" class="rounded-xl">

                        </div>
                        
                        <div id = "text2" class="space-y-4 lg:text-lg leading-loose">
                            <h1 class="font-semi-bold text-3xl lg:text-4xl mb-10">
                                Bacheca Animal House
                            </h1>

                        
                            In questa pagina è possibile condividere immagini e aneddoti riguardanti gli animali con gli altri utenti del portale, apprestati a dire la tua!
                        </div>
                        <section id="formSection" class="col-span-12 mx-2.5">
                        @auth
                           <form>
                                
                                <p class="formP" > Tipologia
                                    <select name="tipologia"> 
                                        <option value="Dog Sitter">Dog sitter</option>
                                        <option value="Pensione Estiva">Pensione estiva</option>
                                        <option value="Visita A Domicilio">Visita a domicilio per animali soli</option>
                                    </select>
                                </p>
                                <p class="formP" > Numero di telefono
                                    <input type="tel" name="telefono">
                                </p>
                                
                                <p class="formP" > Email
                                    <input type="text"  name="email"  value="{{ $email }}">
                                </p>
                                <p class="formP" > nome
                                    <input type="text"  name="nome"  value="{{ $name }}">
                                </p>
                                <p class="formP" > Una immagine (facoltativa)
                                <input type="file"  name="immagine" accept="image/png, image/jpeg">

                                </p>


                                <p class="formP"  > Descrizione
                                <textarea id="descrizione"  rows="4" cols="50" name="descrizione">

                                </textarea>
                                   
                                </p>

 


                           </form>
                            <button id="invia" onclick="creaServizio()"> invia</button>
                          
                        @endauth
                        
                    </section>
                    </div>

                    
                </article>
            </main>

            
        </section>
    </body>
</x-layout>
<script>
  
   async function creaServizio() {

            let tipologia = document.forms[1].elements["tipologia"].value;
            let email = document.forms[1].elements["email"].value;
            let telefono = document.forms[1].elements["telefono"].value;
            let descrizione = document.forms[1].elements["descrizione"].value;
            let nome = document.forms[1].elements["nome"].value;

            if((telefono=="")||(email=="")||(descrizione=="")||(nome=="")){
                alert (" Attenzione!\n Per inviare una proposta di servizio \n è necessario compilare tutti i campi");  

            }
            else{
            if(!validatePhoneNumber(telefono)){
                alert (" Attenzione!\n il numero di telefono inserito non è valido");  

            }
            else{
                document.getElementById('formSection').style.backgroundColor  ="lightgreen";
                document.getElementById('formSection').innerHTML = "<p id='dopoInvio'> La  proposta è stata inviata correttamente! </p>"
                console.log('descrizione ='+descrizione+'telefono ='+telefono+'email ='+email+'tipologia ='+tipologia+'nome ='+nome);

                console.log('validatePhoneNumber(telefono)=  '+ validatePhoneNumber(telefono));
            }
        }
        
        }
        function validatePhoneNumber(input_str) {
            var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
            return re.test(input_str);
        }


</script>
<style>


    body{
        
        background-color:#F0ACE2;
        }
    #backToServices{
       margin-left:35%;
        
        }
        .col-span-8{
            margin-left:27%;
            width:100%;
            display: grid;
	        grid-template-columns: 1fr 1fr 1fr;
	        grid-template-areas: "image1 text1 text1"
                                 "text2 text2 image2"
                                 "form1 form1 form1"
        }
        #text1{
            padding:7%;
            grid-area: text1;
        }

        #text2{
            padding:7%;
            grid-area: text2;
        }
        #image2{
            grid-area: image2;
        }
        #image1{
            grid-area: image1;
        }
        #formSection{
            background-color:lightgrey;
            border-radius: 25px; 
            grid-area: form1;
            padding:3%;
            margin:1%;
            box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        }
        .formP {
            margin:7%;
            padding-bottom:2%;
            border-bottom: 2px solid grey;
        }
        #invia{
            background-color:deeppink;
            color:white;
            border:1px solid black;
            padding:1%;
            padding-left:7%;
            padding-right:7%;
            margin:0%;
           
           
            float:right;
        }
       
        
       
       
</style>