<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="initial-scale=1.0">

  <title>GENERACION DE REPORTES</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<input type="submit" value="REGRESAR AL INICIO" onclick = "location='index.php'" style='width:170px; height:40px' align='right'>
<center><img src="imagenes/LOGO.png" whith="180" height="180"></center>

<body background="imagenes/2.jpg" >
<h1 align="center">GENERACION DE REPORTES</h1>

<div class="busqueda">
<br>
<br>
<center><form>
  <label id="mes">SELECCIONE EL MES QUE DESEA BUSCAR 
  <select name="select">
    <option>enero</option>
    <option>febrero</option>
    <option>marzo</option>
    <option>abril</option>
    <option>mayo</option>
    <option>junio</option>
    <option>julio</option>
    <option>agosto</option>
    <option>septiembre</option>
    <option>octubre</option>
    <option>noviembre</option>
    <option>diciembre</option>
  </select>
  </label>
  <input type="submit" name="buscador" value="Buscar" />
</form>
<br>
<?php
   $buscar = $_GET['mes'];
   $link=mysql_connect("localhost","root","root");
   $database=mysql_select_db("cobach",$link);
   $result=mysql_query("select*from alumnos WHERE fecha LIKE '%$buscar%'");

echo "<table border='1'>\n";
  echo "<tr>\n";
  echo "<td><b> NOMBRE</b></td>\n";
  echo "<td><b>APELLIDOS</b></td>\n";
  echo "<td><b> SEMESTRE</b></td>\n";
  echo "<td><b> GRUPO</b></td>\n";
  echo "<td><b> ASESOR</b></td>\n";
  echo "<td><b>FECHA</b></td>\n";
  echo "<td><b> HORARIO</b></td>\n";
  echo "<td><b> TEMA DE LA CLASE</b></td>\n";
 
  while($row=mysql_fetch_row($result))
  {


        echo "<tr>\n";
        echo "<td>$row[0]</td>\n";
        echo "<td>$row[1]</td>\n";
        echo "<td>$row[2]</td>\n";
        echo "<td>$row[3]</td>\n";
        echo "<td>$row[4]</td>\n";
        echo "<td>$row[5]</td>\n";
        echo "<td>$row[6]</td>\n";
        echo "<td>$row[7]</td>\n";
     


 echo "<tr>\n";
  }
  echo "</table>";
?>
</div>
</center>


</p>
<br>
<br>
<br>
<br>


</body>
</html>
