<div class="row">
	<div class="col-lg-12">
    	<h1 class="page-header">Añadir Promciones</h1>
	</div> 
	<br> 
<div style="padding-left:50px">
	<div class="form-group">
		{!!Form::label('Título')!!}
		<br>
		{!!Form::text('titulo',null,['class'=>'form-contol','placeholder'=>'Ingresa el título']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('Descripción')!!}
		<br>
		{!!Form::textarea('descripcion',null,['class'=>'form-contol','rows'=>'3','placeholder'=>'Describe la promoción']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('Photo','Imagen')!!}
		{!!Form::file('path');!!}
	</div>
	<label>Vigencia </label>
	<div class="form-group">
		{!!Form::label('Desde')!!}
		<br>
		{!!Form::date('iniciovigencia',null,['class'=>'form-contol','placeholder'=>'Ingresa el título']);!!}
	</div>
		<div class="form-group">
		{!!Form::label('hasta')!!}
		<br>
		{!!Form::date('terminovigencia',null,['class'=>'form-contol','placeholder'=>'Ingresa el título']);!!}
	</div>

</div>
</div>