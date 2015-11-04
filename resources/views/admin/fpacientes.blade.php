<div class="row">
	<div class="col-lg-12">
    	<h1 class="page-header">Añadir Nuevo Paciente</h1>
	</div>           
</div>
<div class="panel-heading">
	<div class="form-group">
	{!!Form::label('Nombre')!!}
	<br>
	{!!Form::text('nombre',null,['class'=>'form-contol','placeholder'=>'Ingresa el Nombre']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('Apellido')!!}
		<br>
		{!!Form::text('apellido',null,['class'=>'form-contol','placeholder'=>'Ingresa el Apellido']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('Número Telefónico')!!}
		<br>
		{!!Form::text('telefono',null,['class'=>'form-contol','placeholder'=>'Ingresa el telefono']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('E-mail')!!}
		<br>
		{!!Form::text('email',null,['class'=>'form-contol','placeholder'=>'email@email.com']);!!}
	</div>
	<div class="form-group">
		{!!Form::label('Password')!!}
		<br>
		{!!Form::password('password',['class'=>'form-contol','placeholder'=>'*******']);!!}
	</div>
</div>