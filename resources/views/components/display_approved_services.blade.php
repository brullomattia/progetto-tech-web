<article  id="lineArticle">


    <div class="box">
                <div class="flex-shrink-0" id="left">
                    <img src="{{ url('public/Image/'.$service->image) }}" class="serviceImg">
                </div>
                <div id="center">
                            <div class="usernameDiv">
                                <p class="username"> {{$service->nome}}</p>
                            </div>
                            <div class="emailDiv">
                                <p class="data"> {{$service->email}}</p>
                            </div>
                            <div class="telDiv">
                                <p class="data"> {{$service->tel}}</p>
                            </div>
                            <div class="dataDiv">
                                <p class="data" id="dataP"><time>{{ $service->created_at->diffForHumans() }}</time></p>
                            </div>
                            <div class="deleteDiv">
                                <a href=" {{route('service.delete', $service->id)}}" class="delBtn">DELETE</a>
                            </div>
                </div>

                <div id="right">
                    <div class="typeDiv">
                        <h3 class="title"> {{$service->type}}</h3>
                    </div>
                    <div class="descirizioneDiv">
                        <p class="descrizione">{{$service->description}}</p>
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

}

#lineArticle{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    margin:1%;
    padding:0.5%;
    background: rgba(132, 244, 113, 0.5);
    padding:2%;

}
.serviceImg{
    border: 2px solid green;
}
#dataP{
    font-style:italic;
    font-size:13px;

}

#right{
    flex:1;
    margin-left:2%;
}
#left{
    flex:1;
    margin-right:1%;
}
.data{
    margin:0.6%;;
}
.username{
    font-size:15px;
    font-weight:bold;

    color: green;
}
#center{

    flex:1;

    border-right: 2px solid green;
}
.usernameDiv , .emailDiv , .telDiv , .dataDiv{

    margin-bottom:1.5%;
}
.delBtn{
    background-color:rgb(215, 45, 45);
    color:white;
    padding:3%;
    font-style: italic;
    font-size: 10px;
    font-weight: bold;
    border-radius: 25px;


}
.deleteDiv{
    margin-top:5%;
}

</style>
