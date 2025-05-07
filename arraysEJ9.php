<?php
echo "Ejercicio 9:<br>";

// inventario
$comics = [
    ["titulo" => "Naruto", "precio" => 9.95, "stock" => 20, "idioma" => "japonés"],
    ["titulo" => "Batman", "precio" => 12.50, "stock" => 15, "idioma" => "inglés"],
    ["titulo" => "One Piece", "precio" => 8.75, "stock" => 30, "idioma" => "japonés"],
    ["titulo" => "Spiderman", "precio" => 11.00, "stock" => 10, "idioma" => "inglés"]
];


function mostrarValorAlmacen($comics) {
    $total = 0;
    foreach ($comics as $comic) {
        $valorComic = $comic["precio"] * $comic["stock"];
        $total += $valorComic;
    }
    echo "Valor total del almacén: " . number_format($total, 2) . " €<br>";
}

function aplicarDescuentoManga(&$comics) {
    foreach ($comics as &$comic) {
        if ($comic["idioma"] === "japonés") {
            $comic["precio"] *= 0.7; // 30% descuento
        }
    }
}

mostrarValorAlmacen($comics);
aplicarDescuentoManga($comics);
echo "<br>Inventario tras aplicar el descuento del 30% a los cómics en japonés:<br>";

foreach ($comics as $comic) {
    echo "Título: {$comic['titulo']}, Precio: " . number_format($comic['precio'], 2) . " €, Stock: {$comic['stock']}, Idioma: {$comic['idioma']}<br>";
}

echo "<br>";
mostrarValorAlmacen($comics);

?>