<?php
class Producto {
    private $codigoBarra;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantStock;

    public function __construct ($codigoBarra, $marca, $color, $talle, $descripcion, $cantStock) {
        $this -> codigoBarra = $codigoBarra;
        $this -> marca = $marca;
        $this -> color = $color;
        $this -> talle = $talle;
        $this -> descripcion = $descripcion;
        $this -> cantStock = $cantStock;
    }

    public function __toString() {
        return "Codigo de barra: ". $this -> getCodigoBarra(). " - Marca: ". $this -> getMarca(). " - Color: ". $this -> getColor(). " - Talle: ". $this -> getTalle(). " - Descripción: ". $this -> getDescripcion(). " - Stock: ". $this -> getCantStock(). "\n";
    }

    public function actualizarStock ($cantStock) {
        if ($cantStock > 0) {
            $cantStock = $this -> getCantStock() + cantStock;
        } else {
            $cantStock = abs($cantStock);
            $cantStock = $this -> getCantStock() - $cantStock;
        }
        setCantStock($cantStock);
    }


}
?>