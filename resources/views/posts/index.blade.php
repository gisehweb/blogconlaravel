
<x-layouts.app 
 title="Blog" 
 meta-description="Blog meta description"
>


<h1>Blog</h1>

<a href="{{route('posts.create')}}">Crear Nuevo Post</a>
  @foreach ($posts as $post)

  <div style="display: flex; align-items :baseline">
    <h2>
      <a href="{{route('posts.show', $post->id)}}">
        {{$post->title}}</a>
    </h2>&nbsp;
<a href ="#"> Edit</a>
  </div>
  @endforeach

</x-layouts.app>