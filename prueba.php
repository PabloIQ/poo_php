<?php
require_once 'cliente.php';

$c1 = new Cliente ("Pablo");
$c2 = new Cliente ("Ana");

?>

<ol>
    <li><?= $c1->getnombre()?></li>
    <li><?= $c2->getnombre()?></li>
</ol>