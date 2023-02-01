
<article  id="lineArticleU">

    <div class="box">
                <div class="flex-shrink-0" id="leftU">
                    <img src="{{ url('public/Image/'.$service->image) }}" class="serviceImgU">
                </div>
                <div id="centerU">
                            <div class="usernameDiv">
                                <p class="usernameU"> {{$service->nome}}</p>
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

                                <a href=" {{route('service.approve', $service->id)}}" class="appBtn">APPROVE</a>
                            </div>
                </div>

                <div id="rightU">
                    <div class="typeDiv">
                        <h3 class="titleU"> {{$service->type}}</h3>
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
.titleU{
    color: rgb(186, 5, 5);
    font-size:25px;
    font-weight:bold;
    border-bottom:2px solid rgb(186, 5, 5);

}

#lineArticleU{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    margin:1%;
    padding:0.5%;
    background: rgba(255, 58, 58, 0.655);
    padding:2%;

}
.serviceImgU{
    border: 2px solid rgb(186, 5, 5);
}
#dataP{
    font-style:italic;
    font-size:13px;

}

#rightU{
    flex:1;
    margin-left:2%;
}
#leftU{
    flex:1;
    margin-right:1%;
}
.data{
    margin:0.6%;;
}
.usernameU{
    font-size:15px;
    font-weight:bold;

    color: rgb(186, 5, 5);
}
#centerU{

    flex:1;

    border-right: 2px solid rgb(186, 5, 5);
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
.appBtn{
    background-color:rgb(7, 159, 2);
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
