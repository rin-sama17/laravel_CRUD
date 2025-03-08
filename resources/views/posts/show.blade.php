<x-main>
   <div class="flex flex-col mt-2 px-2">
    <a href="{{route('posts.index')}}" class="w-20 btn bg-sky-300 hover:bg-sky-500 translation-all duration-400 active:bg-sky-700">back ro home</a>
            <div class="flex text-2xl">

                <h2>{{$post->title}} </h2>
                <h3 class="text-gray-400 ml-2">{{$post->created_at}}</h3>
            </div>

            <textarea class="bg-amber-300 mt-3" rows="10">{{$post->content}}</textarea>
   </div>
</x-main>
