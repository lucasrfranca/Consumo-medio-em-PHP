<?php
 
 $km = $_POST["km"];
 $gas = $_POST["gas"];

 $res=$km/$gas;
 echo "<center> <h1> O consumo médio do automóvel é de " . number_format($res,2) . " Km/L </h1> </center>"

?>