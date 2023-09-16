<!-- el app es para las plantillas de blade -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aprendible - {{$title ?? ''}}</title> 
    <meta name='descrption' content="{{ $metaDescription ?? 'Default description' }}"/>
</head>
<body>
    <!-- el @ es para las plantillas de blade -->

 <!-- con el yield('content') todo lo que queramos poner se colocara en esa seccion de la plantilla-->
<x-layouts.navigation/>
@if(session('status'))
<div class="status">
{{session('status')}}
</div>
@endif
{{$slot}}
<!--Este slot es equivalente al @yield('content') asi que lo podemos quitar-->
</body>
</html>