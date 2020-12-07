
<div class="row">
<div class="col-lg-12 col-md-10 col-ms-20 col-xs-15">
<div style="border: 0px solid red;">
@include('includes.header')
@include('includes.head')
</div>
<div class="contenido">
<center>
<h1 class="titulo"> Reporte de Usuarios </h1>
<table border= "1">
<tr><td>Id</td><td>Nombre</td><td>Apellido</td><td>Correo</td><td>Telefono</td><td>User</td><td>Password</td><td>opciones</td></tr>
@foreach($consulta as $usuarios)

<tr><td>{{$usuarios->id}}</td>
	<td>{{$usuarios->nombre}}</td>
	<td>{{$usuarios->apellido}} </td>
	<td>{{$usuarios->correo}}</td>
	<td>{{$usuarios->telefono}}</td>
	<td>{{$usuarios->user}}</td>
	<td>{{$usuarios->password}}</td>
	<td>Eliminar Modificar</td>
</tr>
@endforeach
</table>

</center>
</div>
<div style="border: 0px solid red;" align="center">

@include('includes.footer')

</div>