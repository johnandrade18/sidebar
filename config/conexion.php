<?php
require_once "global.php";
try{
 /*En este caso el tipo es pgsql, además le indicamos el puerto */
 $conexion = new PDO("pgsql:host=$host;dbname=$dbname;port=$port", "$username", "$password");
 $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
 echo "ERROR: " . $e->getMessage();
 }

?>
