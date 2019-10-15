<?php require_once("recursos/head.php");?>
<body>
<?php require_once("recursos/header.php");?>
<section>
<br>
<h2 class="my-5 h3 text-center">Album Pokedex...</h2>
<div class="row features-small mt-5 wow fadeIn">
<div class="container">

  <form action="pokemones.php" method="post" class="form-inline md-form form-sm mt-0">
    <input type="text" name="buscador" id="inputBuscador" class="form-control" placeholder="Nombre del Pokemon" required autofocus>
    <button type="submit" name="btn-buscador" id="btn-buscador" class="btn btn-lg submit">Buscar</button>
  </form>

  <form action="pokemones.php" method="post" class="form-inline md-form form-sm mt-0">
    <input type="text" name="eliminador" id="inputBuscador" class="form-control" placeholder="Nombre del Pokemon" required autofocus>
    <button type="submit" name="btn-buscador" id="btn-buscador" class="btn btn-lg submit">Buscar</button>
  </form>
  <form action="pokemones.php" method="post">
    <button class="btn btn-lg submit" type="submit" value="Agregar">Agregar</button><br>
    <label>Nombre:</label> <input class="form-control" type="text" name="nombre"><br>
    <label>Tipo:</label> <input class="form-control" type="text" name="tipo"><br>
    <label>Descripcion:</label> <input class="form-control" type="text" name="tipo"><br>
    <label>Imagen:</label> <input class="form-control" type="text" name="imagen"><br>
    <input class="form-control" type="submit" value="Enviar">
  </form>
<!-- controlador_alta -->
<?php

$nombre = "";
$tipo = "";
$descripcion = "";
$imagen = "";

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$descripcion = $POST['descripcion'];
$imagen = $_POST['imagen'];

$conn=mysqli_connect("localhost","root", "","pokedex");

if($nombre!= "" && $tipo!= "" && $imagen!= ""){
    $sql= "insert into pokemon (nombre, tipo, imagen) values('$nombre', '$tipo', '$imagen')";
    
if(mysqli_query($conn,$sql )) {echo "Se agrego nuevo Pokemon";}else{echo "Error al intentar agregar pokemon";}
}
 


?>
<!--  -->
  <br> <br>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th > 
    </tr>
  </thead>
  <tbody>
<?php
//controlador_pokemones
$elimina = "";
$busca= "";

$elimina= $_POST['eliminador'];
$busca=$_POST['buscador'];

$conn=mysqli_connect("localhost","root", "","pokedex");

if($elimina== ""){
    $sql="SELECT * FROM pokemones";
$result=mysqli_query($conn,$sql);

}else{
	$result=mysqli_query($conn, "DELETE  FROM pokemones WHERE id = $elimina");}


$conn=mysqli_connect("localhost","root", "","pokedex");
if($busca== ""){
    $sql="SELECT * FROM pokemones";
$result=mysqli_query($conn,$sql);

}else{$result=mysqli_query($conn, "SELECT * FROM pokemones WHERE nombre LIKE '%".$busca."%'");}
//

while ($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['descripcion']."</td>";
    echo "<td><img src=".$row['imagen']."></td>";
    echo "<td><a href=\"delete&&id= a><td>";

    echo "</tr>";
}
?>
  </tbody>
</table>
</div>
</div>

</section>
<?php require_once("recursos/footer.php");?>
</body>
</html>