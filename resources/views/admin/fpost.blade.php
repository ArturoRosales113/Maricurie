<div class="row">
	<div class="col-lg-12">
    	<h1 class="page-header">Añadir Nueva Entrada</h1>
	</div>           
</div>
<div class="panel-heading">

	<div class="form-group">
	{!!Form::label('Titulo')!!}
	<br>
	{!!Form::text('titulo',null,['class'=>'form-contol','placeholder'=>'Mi Blog ']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('Photo','Imagen')!!}
		<br>
		{!!Form::file('path');!!}
	</div>
	<div class="form-group">
		{!!Form::label('Contenido')!!}
		<br>
		{!!Form::textarea('texto',null,['class'=>'form-contol','rows'=>'5','placeholder'=>'  Contenido']);!!}
	</div>

	<div class="form-group">
		{!!Form::label('Etiquetas')!!}
		<br>
		{!!Form::text('tags',null,['class'=>'form-contol','placeholder'=>'  etiqueta1, etiqueta2,']);!!}
	</div>
</div>