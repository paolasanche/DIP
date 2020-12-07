
<div class="row">
<div class="col-lg-12 col-md-10 col-ms-20 col-xs-15">
<div style="border: 0px solid red;">
@include('includes.header')
@include('includes.head')
</div>
<div class="contenido">
<center>
<h1 class="titulo"> Reporte de Salones </h1>
<table border= "1">
<tr><td>Idsalon</td><td>Direccion</td><td>Calle</td><td>Cp</td><td>Contacto</td><td>Telefono</td><td>Correo</td><td>opciones</td></tr>
@foreach($consulta as $salones)
<tr><td>{{$salones->id}}</td>
	<td>{{$salones->direccion}}</td>
	<td>{{$salones->calle}} </td>
	<td>{{$salones->cp}}</td>
	<td>{{$salones->contacto}}</td>
	<td>{{$salones->telefono}}</td>
	<td>{{$salones->correo}}</td>
	<td>Eliminar Modificar</td>
</tr>
@endforeach
</table>

</center>
</div>
<div style="border: 0px solid red;" align="center">

@include('includes.footer')

</div>