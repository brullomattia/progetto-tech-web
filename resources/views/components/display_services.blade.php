<article  id="lineArticle">
        <div class="box">

            <div id="left">

                <div class="flex-shrink-0">
                    <img src="{{ url('public/Image/'.$service->image) }}" alt="" width="300" height="300" id="service_img" class="">
                </div>
            </div>

            <div id="center">
                <div class="usernameDiv">
                    <h3 class="username"> {{$service->nome}}</h3>
                </div>
                <div class="emailDiv">
                    <p class="und">Email:</p>
                    <p class="data"> {{$service->email}}</p>

                </div>
                <div class="telDiv">
                    <p class="und">tel:</p>
                    <p class="data"> {{$service->tel}}</p>

                </div>
                <div class="date">
                    <p class="und"> Data Annuncio:</p>
                    <time>{{ $service->created_at->diffForHumans() }}</time>

                </div>

            </div>

            <div id="right">
                <div class="type">
                    <h3 id="serviceType"> {{$service->type}}</h3>

                </div>
                <div class="description">
                    <p class="data">{{$service->description}}</p>
                </div>

            </div>


        </div>
 </article>
 <style>
.box{
    display: flex;
    width:100%;
	flex-direction: row;
	flex-wrap: wrap;
    opacity: 1;

}

.username {
    font-size:25px;
    font-weight:bold;
    color:rgb(190, 3, 3);
}
#serviceType{
    border-bottom: 2px solid red;
    font-size:35px;
    font-weight:bold;
    color:rgb(190, 3, 3);
}
#right{
    flex:2;
    border-left: 2px solid red;
    padding-left:3%;
}
#center{
    flex:1;
padding:2%;
}
#left{
flex:1;
padding:0%;
}
#lineArticle{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    margin:1%;
    padding:0.5%;
    background: rgba(255, 255, 255, 0.5);

}


#service_img{
border: 2px solid red;


}
.und{
text-decoration:underline;
    font-size:10px;

}

</style>
