<x-layouts.app 
 title="Crear Nuevo Post" 
 meta-description="Formulario para crear un nuevo post blog">

<h1>Ceate new post</h1>

<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label>
        Titulo<br>
    <input name="title" type="text" value="{{old('title')}}">
    <br>
    @error('title')
    <small style="color: red">{{$message}}</small>
    @enderror
</label>

<label><br>

        Body<br>
    <textarea name="body">{{old('body')}}</textarea>
    <br>
    @error('body')
    <small style="color: red">{{$message}}</small>
    @enderror
</label><br>
<button type="submit">Enviar</button>
<br>
</form>

<a href="{{route('posts.index')}}"> Regresar</a>

</x-layouts.app>