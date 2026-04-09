<?php

$contentJSON = file_get_contents("usuarios.json");

$usuariosArray = json_decode($contentJSON, true);

$usuariosArray = $usuariosArr["usuarios"];


foreach ($usuarios as $usuario ) {
   foreach ($usuario as $key => $value) {
      if($key != "id"){
         echo $key . " : " . $value . "<br/>";
      }
      
   }
   echo "<hr/>";
}
?>