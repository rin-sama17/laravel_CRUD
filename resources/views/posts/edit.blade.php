<x-main>
    <form action="{{route('posts.update' ,$post)}}" method="Post">

       @csrf
       @method("PUT")
       <div class="flex flex-col">
 
          <label for="title">title</label>
          <input class="input" type="text" name="title" id="title" value="{{$post->title}}" required><br>
       </div>
       <div class="flex flex-col">
 
       <label for="content">content</label>
       <input class="input "  type="text" name="content" id="content" value="{{$post->content}}"  required>
       </div>
 
       <button class="w-20 btn" type="submit"> create</button>
      </form>
 </x-main>
 