<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratorios Marie Curie</title>
    
{!!Html::style('css/bootstrap.min.css')!!}
{!!Html::style('css/metisMenu.min.css')!!}
{!!Html::style('css/sb-admin-2.css')!!}
{!!Html::style('css/font-awesome.min.css')!!}
{{--{!!Html::style('css/laboratorios.css')!!}--}}

</head>
<body>
 
        <div id="page-wrapper">
 			@yield('content')	
        </div>


{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}
</body>


</html>