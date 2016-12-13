<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar1.php</title>
  </head>
  <body>
    <div align="center">
    <h1>Borrar Registros</h1>
    <br>
    <?
//Conexion con la base de datos
mysql_connect("localhost","LPENUELA","optime1234");

//seleccion de la base de datos con la que se va a trabajar
mysql_select_db("hpengageandgrowth_dev");
echo ´<FORM METHOD= "POST" ACTION="borrar2.php"> user_id<br>´;

//se crea la sentencia sql y se ejecuta
$sSQL="Select user_id from blue_bills_numbers order by number_bluebill";
$result=mysql_query($sSQL);
echo ´<select >´
  ?>
  </body>
</html>
