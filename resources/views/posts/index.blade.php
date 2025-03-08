<x-main>
    <a href="{{route('posts.create')}}" class="btn translation-all duration-400">new post</a>

    
<div class="grid grid-cols-3 gap-3   ">
    @foreach ($posts as $post)
    <div class="rounded bg-blue-200 p-3 flex flex-col justify-between ">
        <div class="flex flex-col h-80 overflow-hidden text-ellipsis ">

            <h6 class="text-3xl">{{$post->title}}</h6>
            <h6 class="text-2xl ">{{$post->content}}</h6>
        </div>
        <div class="flex space-x-2 mt-2">

            <a href="{{route('posts.edit' ,$post)}}" class="w-20 btn bg-sky-300 hover:bg-sky-500 translation-all duration-400 active:bg-sky-700">edit</a>
            <a href="{{route('posts.show' ,$post)}}" class="w-20 btn bg-sky-300 hover:bg-sky-500 translation-all duration-400 active:bg-sky-700">show</a>

            <form  action="{{route("posts.destroy" , $post)}}" method="POST">
                @csrf
                @method("DELETE")

                <button type="submit" class="w-20 btn bg-red-300 hover:bg-red-500 translation-all duration-400 active:bg-red-700">delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-4">
    {{ $posts->links() }}
</div>
</x-main>
