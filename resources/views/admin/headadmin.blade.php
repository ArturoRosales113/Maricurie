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
	<div id="wrapper">


        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8888/Maricurie/public/">Marie Curie Labs Admin</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Preferencias</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Cesión</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Pacientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Maricurie/public/paciente/create"><i class='fa fa-plus fa-fw'></i> Nuevo Paciente</a>
                                </li>
                                <li>
                                    <a href="/Maricurie/public/paciente"><i class='fa fa-list-ol fa-fw'></i> Pacientes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar-o fa-fw"></i> Promociones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Maricurie/public/promos/create"><i class='fa fa-plus fa-fw'></i> Nueva Promoción</a>
                                </li>
                                <li>
                                    <a href="/Maricurie/public/promos"><i class='fa fa-list-ol fa-fw'></i> Promociones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Blog<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/Maricurie/public/post/create"><i class='fa fa-plus fa-fw'></i> Agregar Entrada</a>
                                </li>
                                <li>
                                    <a href="/Maricurie/public/post"><i class='fa fa-list-ol fa-fw'></i> Blog</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
     </nav>
 
        <div id="page-wrapper">
 			@yield('content')	
        </div>

    </div>

{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}
</body>


</html>