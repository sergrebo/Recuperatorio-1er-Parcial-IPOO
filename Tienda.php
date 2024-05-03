<?php
class Tienda{
    private $nombre;
    private $direccion;
    private $telefono;
    private $colProductos;
    private $colVentas;

    public function __construct($nombre, $direccion, $telefono, $colProductos, $colVentas)
    {
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->colProductos=$colProductos;
        $this->colVentas=$colVentas;
    }

    public function getColProductos(){
        return $this->colProductos;
    }

    public function __toString()
    {
        return $this->getNombre(). " ". $this->getDireccion(). " ". $this->getTelefono(). " ". $this->leerArreglo($this->getColProductos()). " ". $this->leerArreglo($this->getColVentas());
    }

    public function leerArreglo($unArreglo){
        $cadena="";
        for ($i=0; $i < count($unArreglo) ; $i++) { 
            $cadena = $cadena . $unArreglo[$i];
        }
        return $cadena;
    }

    public function buscarProducto($unCodigoBarra){
        $prodEncotrado=false;
        $colProd=$this->getColProductos();
        $indiceProd=0;
        $prodBuscado=null;
        while ($indiceProd < count($colProd) && !$prodEncotrado) {
            if ($colProd[$indiceProd]->getCodigoBarra() == $unCodigoBarra) {
                $prodEncotrado=true;
                $prodBuscado=$colProd[$indiceProd];
            }
            $indiceProd++;
        }
        return $prodBuscado;
    }

    public function realizarVenta($arregloAsociativo){
        $productoAVender=$this->buscarProducto($arregloAsociativo["codigoBarra"]);
        $unaVenta= new Venta(date("d-m-Y"), null, count($this->getColVentas()), )
    }
}