
<html>
<div style="border: 0px solid red;">

@include('includes.header')
@include('includes.head')
</div>
<br>

<body align="center">

<h1 class="titulo" align="center">REGISTRO DE USUARIOS</h1>

<table align="center" >
 


 <tr>
  <td>
    <label for="name">Nombre:</label>
  </td>
  <td>
    <input type="text" id="name" name="user_name">
  </td>
</tr>




<tr>
		<td>
      <label for="mail">Apellido:</label>
    </td>
   <td> 
      <input type="apellido" id="apellido" name="apellido">
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
      <label for="mail">Telefono:</label>
    </td>
   <td> 
      <input type="telefono" id="telefono" name="telefono">
   </td>

	</tr>





  <tr>
		<td>
      <label for="mail">User:</label>
    </td>
   <td> 
      <input type="user" id="user" name="user">
   </td>

	</tr>





  <tr>
		<td>
      <label for="mail">Password:</label>
    </td>
   <td> 
      <input type="password" id="password" name="password">
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
