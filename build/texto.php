<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

echo "RESULTADOS";
echo "<br>";
echo "Nombre: ". $_POST['nombre']; 
echo "<br>";
echo "Apellido: ". $_POST['apellido'];
echo "<br>";
echo "Usuario: ". $_POST['usuario'];
echo "<br>";
echo "Ciudad: ". $_POST['ciudad'];
echo "<br>";
echo "Zip: ". $_POST['zip'];
echo "<br>";
echo "Aceptado". $_POST['check'];
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>