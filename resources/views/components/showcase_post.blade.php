<article class="flex space-x-4 p-10 bg-gray-200  my-2" id="lineArticle">
        <div class="flex-shrink-0">
            <img src="{{ url('public/Image/'.$post->image) }}" alt="" width="200" height="200" class="">
        </div>

        <div>
            <header class="mb-4" id="head">
                <h3 class="font-bold">{{$post->user->username}}</h3>

                <p class="text-xs">
                    Posted
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>
            </header>

            <p>
                {{$post->text}}
            </p>
        </div>
    </article>

    <style>

#lineArticle{
    box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    margin:1%;
    padding:0.5%;
    background: rgba(255, 255, 255, 0.5);

}
#head{
    border-bottom: 2px solid rgb(190, 3, 3);
    margin-bottom:1%;

}

    </style>
