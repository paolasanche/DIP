
<div class="row">
<div class="col-lg-12 col-md-10 col-ms-20 col-xs-15">
<div style="border: 0px solid red;">
@include('includes.header')
@include('includes.head')
</div>
<div class="contenido">
<center>
<h1 class="titulo"> Reporte de tipo servicio</h1>
<table border= 1>
<tr><td>Idservicio</td><td>Tipo</td><td>opciones</td></tr>
@foreach($consulta as $tiposervicios)
<tr>

	<td>{{$tiposervicios->id}}</td>
	<td>{{$tiposervicios->nombre}}</td>
	<td>Eliminar Modificar</td>
</tr>
@endforeach
</table>
</center>
</div>
<div style="border: 0px solid red;" align="center">

@include('includes.footer')

</div>