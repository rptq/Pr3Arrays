<?php
echo "Ejercicio 1:";
// Ejercicio 1
$persona = ["nombre" => "Carlos", "apellido" => "Perez", "edad" => 30, "ciudad" => "Madrid"];
$dato=1;
foreach ($persona as $valor) {
    $dato++; 
    echo "<br>Dato $dato: $valor"; //muestra cada valor
}
?>
<br><br>

<?php
echo "Ejercicio 2:";
// Ejercicio 2
$persona = ["nombre" => "Carlos", "apellido" => "Perez", "edad" => 30, "ciudad" => "Madrid"];
foreach ($persona as $clave => $valor) echo "<br>$clave: $valor"; //muestra clave y valor
?>
<br><br>

<?php
echo "Ejercicio 3:";
// Ejercicio 3
$persona = ["nombre" => "Carlos", "apellido" => "Perez", "edad" => 30, "ciudad" => "Madrid"];
$persona["edad"] = 31; //cambia la edad
foreach ($persona as $clave => $valor) echo "<br>$clave: $valor"; //muestra claves y valores
?>
<br><br>

<?php
echo "Ejercicio 4:";
// Ejercicio 4
$persona = ["nombre" => "Carlos", "apellido" => "Perez", "edad" => 30, "ciudad" => "Madrid"];
unset($persona["ciudad"]); //elimina ciudadd
var_dump($persona); //muestra el array
?>
<br><br>

<?php
echo "Ejercicio 5:";
// Ejercicio 5
$letras = "h,w,u,o,w,y,i";
$arrayLetras = explode(",", $letras); //convierte la cadena en array
rsort($arrayLetras); //ordena el array en descendiente
foreach ($arrayLetras as $letra) echo " $letra"; //muestra las letras del array
?>
<br><br>

<?php
echo "Ejercicio 6:";
// Ejercicio 6
$notasAlumnos = ["Paco" => 6, "Lucia" => 8, "Robert" => 9, "Tatiana" => 7, "Carlota" => 5];
arsort($notasAlumnos); //ordena el array en ascendiente
foreach ($notasAlumnos as $nombre => $nota) echo " $nombre: $nota"; //muestra nombre y nota del array
?>
<br><br>

<?php
echo "Ejercicio 7:";
// Ejercicio 7
$notasAlumnos = ["Paco" => 6, "Lucia" => 8, "Robert" => 9, "Tatiana" => 7, "Carlota" => 5];
$media = array_sum($notasAlumnos) / count($notasAlumnos); //la media de las notas
echo "number_format($media, 2)"; // Muestra la media con dos decimales
foreach ($notasAlumnos as $nombre => $nota) if ($nota > $media) echo "$nombre, "; // Muestra los mejores
?>
<br><br>

<?php
echo "Ejercicio 8:";
// Ejercicio 8
$notasAlumnos = ["Paco" => 6, "Lucia" => 8, "Robert" => 9, "Tatiana" => 7, "Carlota" => 5];
$maxNota = max($notasAlumnos); //nota maximae
$mejorAlumno = array_search($maxNota, $notasAlumnos); //nombre del mejor
echo " $mejorAlumno: $maxNota"; //muestra el nombre y la nota
?>
