<?php
require_once 'cliente.php';
require_once 'producto_fisico.php';

$c1 = new Cliente ("Pablo");
$c2 = new Cliente ("Ana");


$productoFisico = new ProductoFisico("Telefono", 1000, 0.5);
echo "Nombre: " . $productoFisico->getNombre() . ", Precio: " . $productoFisico->getPrecio() . ". Peso: " . $productoFisico->calculaPrecioFinal();

?>

<ol>
    <li><?= $c1->getnombre()?></li>
    <li><?= $c2->getnombre()?></li>
</ol>