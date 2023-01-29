<article class="flex space-x-4 p-10 bg-gray-200 rounded-3xl my-2">
    <div class="flex-shrink-0">
        <img src="{{ url('public/Image/'.$post->image) }}" alt="" width="200" height="200" class="">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$post->user->username}}</h3>

            <p class="text-xs">
                Posted management
                <time>{{ $post->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <p>
            {{$post->text}}
        </p>
        <div class="deleteBtn">
            <a href=" {{route('post.delete', $post->id)}}" class="btn">Delete</a>
        </div>
    </div>
</article>
