
<div class="row">
<div class="col-lg-12 col-md-10 col-ms-20 col-xs-15">
<div style="border: 0px solid red;">
@include('includes.header')
@include('includes.head')
</div>
<div class="contenido">
<center>
<h1 class="titulo"> Reporte de servicios </h1>
<table border= 1>
<tr><td>Idservicios</td><td>Servicio</td><td>tipo</td><td>Costo</td><td>Detalle</td></tr>
@foreach($consulta as $servicios)
<tr><td>{{$servicios->id}}</td>
	<td>{{$servicios->nombre}}</td>
	<td>{{$servicios->tiposervicios_id}}</td>
	<td>{{$servicios->costo}} </td>
	<td>{{$servicios->detalle}}</td>
</tr>
@endforeach
</table>
</center>
</div>
<div style="border: 0px solid red;" align="center">

@include('includes.footer')

</div>