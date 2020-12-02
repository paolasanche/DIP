
<html>
<div style="border: 0px solid red;">

@include('includes.header')
@include('includes.head')
</div>
<br>

<body align="center">

<h1 class="titulo" align="center">REGISTRO DE SALONES</h1>

<table align="center" >
 


 <tr>
  <td>
    <label for="name">Dirección:</label>
  </td>
  <td>
    <input type="text" id="direccion" name="direccion">
  </td>
</tr>




<tr>
		<td>
      <label for="mail">Calle:</label>
    </td>
   <td> 
      <input type="calle" id="calle" name="calle">
   </td>

	</tr>




  
<tr>
		<td>
      <label for="mail">CP:</label>
    </td>
   <td> 
      <input type="cp" id="cp" name="cp">
   </td>

	</tr>







  <tr>
		<td>
      <label for="mail">Contacto:</label>
    </td>
   <td> 
      <input type="contacto" id="contacto" name="contacto">
   </td>

	</tr>





    <tr>
		<td>
      <label for="mail">Telefono:</label>
    </td>
   <td> 
      <input type="telefono" id="telefono" name="telefono">
   </td>

	</tr>




  
    <tr>
		<td>
      <label for="mail">Correo electrónico:</label>
    </td>
   <td> 
      <input type="email" id="mail" name="user_mail">
   </td>

	</tr>

  <tr>
    <td>
    </td>

   <td>
      <input type="submit" value="Guardar" />
    </td>  

    <td>
    </td>

</tr>







    
</table>




</body>
<br><br><br><br>
<div style="border: 0px solid red;" align="center">

@include('includes.footer')

</div>

</html>
