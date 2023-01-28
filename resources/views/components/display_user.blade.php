<article class="flex space-x-4 p-10 bg-gray-200 rounded-3xl my-2" id="lineArticle">
        

        <div class="line">
                <div class="usernameDiv">
                    <p class="text-xs">Username:</p>
                    <h3 class="data"> {{$user->username}}</h3>
                   
                    <p class="registered">
                        Registered:
                        <time>{{ $user->created_at->diffForHumans() }}</time>
                    </p>
                </div>
                <div class="emailDiv">
                 <p class="text-xs">Email:</p>
                    
                    <p class="data"> {{$user->email}}</p>
                    
                </div>
                <div class="Memorypoints">
                    <p class="text-xs">Memory Points:</p>
                    <h3 class="data"> {{$user->memory_points}}</h3>
                
                </div>
                <div class="Quizpoints">
                    <p class="text-xs">Quiz Points:</p>
                    <h3 class="data"> {{$user->quiz_points}}</h3>
                
                </div>
                <div class="deleteBtn">
                    
                    <button class="btn">delete</button>
                    
                </div>
                <div class="editBtn">
                    
                    <button class="btn" >edit</button>
                    
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
.text-xs{
    font-style:italic;
    width:50%;
    border-bottom:1px solid blue; 
    
}
.registered{
    font-style:italic;
    font-size:7;
    
}
#lineArticle{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
}

.usernameDiv{
    flex:2;
    
}
.Memorypoints{
    flex:1;
    margin-left:5%;
   
}
.Quizpoints{
    flex:1;
    margin-left:5%;
   
}
.emailDiv{
    flex:1;
}
.deleteBtn{
    flex:1;
}
.editBtn{
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


