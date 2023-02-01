<?php $user= App\Models\User::find(request()->id);
?>
<x-layout2>
    <div class="top">

        <div id="backtohome">
            <a href=" {{route('home_admin')}}"  class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10" >
        Back to admin home page!

            </a>
        </div>
    </div>
    <section id="formSection" class="col-span-12 mx-2.5">


                           <form action=" {{route('update', [$user->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf



                                <p class="formP" > Email
                                    <input required type="email"  name="email"  value="{{$user->email}}">
                                </p>
                                <p class="formP" > Username
                                    <input required type="text"  name="username"  value="{{$user->username}}">
                                </p>



                                <div id="buttonDiv">
                                <button  id="invia" type="submit" class="bg-green-700 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 my-10"> Modifica utente</button>
                                </div>
                            </form>
    </section>
</x-layout2>

<style>

.top{
            flex:1;
            text-align: center;
            margin-bottom:2%;

        }
        #buttonDiv{
            margin:0px;
            padding:0px;
            text-align: center;


        }
body{

background-color: #C1FFC1	;
}
    #backToServices{
       margin-left:35%;

        }

        #formSection{
            background: rgba(255, 255, 255, 0.5);
            box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
            padding:3%;
            margin:1%;
            margin-left:25%;
            margin-right:25%;
            box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        }

        .formP {
            margin:7%;
            padding-bottom:2%;
            border-bottom: 2px solid green;
        }
        #invia{


            float:center;
        }




</style>
