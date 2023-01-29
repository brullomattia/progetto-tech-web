<article class="flex space-x-4 p-10 bg-green-300  my-2" id="lineArticle">
    <div class="registered">
        <p id="registeredP">  Registered:
        <time>{{ $user->created_at->diffForHumans() }}</time>
    </p>
</div>

        <div class="line">
                <div class="usernameDiv">
                    <p class="text-xs" tipo="attributeName">Username:</p>
                    <h3 class="data"> {{$user->username}}</h3>


                </div>
                <div class="emailDiv">
                 <p class="text-xs" tipo="attributeName">Email:</p>

                    <p class="data"> {{$user->email}}</p>

                </div>
                <div class="Memorypoints">
                    <p class="text-xs" tipo="attributeName">Memory Points: {{$user->memory_points}}</p>
                    <p class="text-xs" tipo="attributeName">Quiz Points: {{$user->quiz_points}}</p>


                </div>

                <div class="deleteBtn">

                    <a href=" {{route('delete.user', $user->id)}}" class="btn">Delete</a>

                </div>
                <div class="editBtn">

                    <button class="btn" >Edit</button>

                </div>


        </div>

 </article>
 <style>
.line{
    display: flex;

    width:100%;
	flex-direction: row;
	flex-wrap: wrap;

}
#lineArticle{
    display: flex;
    /*width:100%;*/
	flex-direction: column;
	flex-wrap: wrap;
    padding:1%;

}
p[tipo="attributeName"]{
    font-style:italic;
    font-weight:bold;
    color:	#2E8B57;
    width:50%;
    border-bottom:1px solid #2E8B57;

}
.registered{
    font-style:italic;
    font-size:7;
    float:left;

}
#lineArticle{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
}

.usernameDiv{
    padding:3%;
    flex:2;
    border-right: 1px solid #2E8B57;

}
.Memorypoints{
    flex:1;
    border-right: 1px solid #2E8B57;


}

.emailDiv{
    padding:3%;
    flex:1;
    border-right: 1px solid #2E8B57;
}
.deleteBtn{
    flex:1;
}
.editBtn{
    flex:1;

}
.btn{
    background-color:#2E8B57;
    padding:6%;
    margin-left:22%;
    margin-right:22%;
    border: 1px solid black;
    color:white;
}
#registeredP{
    font-style:normal;
    font-weight:bold;
    font-size:10px;
    color:	#2E8B57;

}
</style>

