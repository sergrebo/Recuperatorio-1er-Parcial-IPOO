<?php
class Venta {
    private $fecha;
    private $objCliente;
    private $nroFactura;
    private $tipoComprobante;
    private $colItems;

    public function incorporarProducto ($unObjProducto, $cantidadAVender) {
        if ($unObjProducto -> getCantStock() >= $cantidadAVender) {
            $unItem = new Item ($cantidadAVender, $unObjProducto);
            $nuevaColItems = $this -> getColItems();
            array_push($nuevaColItems, $unItem);
            $this -> setColItems ($nuevaColItems);
            $cantidadStockRestante = $unObjProducto ->getCantStock() - $cantidadAVender;
            $unObjProducto -> setCantStock ($cantidadStockRestante);
        } else {
            $unObjProducto = null;
        }
        return $unObjProducto;
    }
}
?>