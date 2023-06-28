<!-- el app es para las plantillas de blade -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!-- el @ es para las plantillas de blade -->
@include('partials.navigation')
 <!-- con el yield('content') todo lo que queramos poner se colocara 
 en esa seccion de la plantilla-->
@yield('content')
</body>
</html>