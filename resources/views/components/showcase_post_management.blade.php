<article  id="lineArticle">
    <div class="flex-shrink-0" id="left">
        <img src="{{ url('public/Image/'.$post->image) }}" id="postImg">
    </div>

    <div id="center">
        <header class="mb-4">
            <h3 class="font-bold">{{$post->user->username}}</h3>

            <p class="text-xs">
                Posted
                <time>{{ $post->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <div class="deleteDiv">
            <a href=" {{route('post.delete', $post->id)}}" class="delBtn">Delete</a>
        </div>
    </div>
    <div id="right">

        <p id="text">
            {{$post->text}}
        </p>
    </div>
</article>
<style>
    #lineArticle{
        display: flex;
        width:100%;
        flex-direction: row;
        flex-wrap: wrap;
        box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        margin:1%;
        padding:0.5%;
        background: rgba(132, 244, 113, 0.5);
        padding:2%;

    }
    .titleU{
        color: rgb(186, 5, 5);
        font-size:25px;
        font-weight:bold;
        border-bottom:2px solid rgb(186, 5, 5);

    }

    #right{
        flex:2;
        margin-left:2%;
        border-left:2px solid green;
        padding-left:2%;
    }
    #center{
        flex:1;
        margin-right:1%;
    }
    #left{
        flex:1;
        margin-right:1%;
    }
  #postImg{
    border: 2px solid green;
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
