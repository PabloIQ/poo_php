<?php
class ProductoControler {
    //private $Servicio;

    public function __construct() {
        //Aqui creamos la construccion del servicio
    }

    public function listarProducto() {
        //Usar el atributo servicio y traerse los datos de la BBDD para mostrarlo
    }

    public function ejecuta() {
        $productos = $this-> listarProducto();

        //Cargar la vista y guarda los productos
        require_once("VISTA/Main.php");
    }
}
?>