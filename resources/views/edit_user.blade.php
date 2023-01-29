<?php $user= App\Models\User::find(request()->id);
?>
<x-layout>

    <section id="formSection" class="col-span-12 mx-2.5">
                            

                           <form action=" {{route('update', [$user->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                               
                                
                                <p class="formP" > Email
                                    <input required type="email"  name="email"  value="{{$user->email}}">
                                </p>
                                <p class="formP" > Username
                                    <input required type="text"  name="username"  value="{{$user->username}}">
                                </p>
                                

                                
                                
                                <button  id="invia" type="submit" > Modifica utente</button>
                            </form>
    </section>
</x-layout>

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