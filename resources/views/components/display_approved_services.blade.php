<article class="flex space-x-4 p-10 bg-gray-200 rounded-3xl my-2" id="lineArticle">


        <div class="box">
                <div class="flex-shrink-0">
                    <img src="{{ url('public/Image/'.$service->image) }}" alt="" width="200" height="200" class="">
                </div>

                <div class="usernameDiv">
                    <p class="text-xs">Username:</p>
                    <h3 class="data"> {{$service->nome}}</h3>

                    <p class="date">
                        Data Annuncio:
                        <time>{{ $service->created_at->diffForHumans() }}</time>
                    </p>
                </div>
                <div class="emailDiv">
                 <p class="text-xs">Email:</p>

                    <p class="data"> {{$service->email}}</p>

                </div>
                <div class="type">
                    <p class="text-xs">Servizio:</p>
                    <h3 class="data"> {{$service->type}}</h3>

                </div>
                <div class="description">
                    <p class="data">{{$service->description}}</p>


                </div>

                    <div class="deleteBtn">
                        <a href=" {{route('service.delete', $service->id)}}" class="btn">Delete</a>
                    </div>




        </div>
 </article>
 <style>
.box{
    display: flex;
    width:100%;
	flex-direction: row;
	flex-wrap: wrap;

}
.text-xs{
    font-style:italic;
    width:50%;
    border-bottom:1px solid blue;

}
.date{
    font-style:italic;
    font-size:7;

}
#lineArticle{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
}

.usernameDiv{
    flex:2;

}
.type{
    flex:1;
    margin-left:5%;

}
.description{
    flex:1;
    margin-left:5%;

}
.emailDiv{
    flex:1;
}
.btn{
    background-color:deeppink;
    padding:6%;
    margin-left:22%;
    margin-right:22%;
    border-radius: 5px;
    border: 1px solid black;
    color:white;

}

</style>
