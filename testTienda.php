<?php
include "Producto.php";
include "Item.php";
include "Venta.php";
include "Tienda.php";

$objProducto1= new Producto(0001, "Adidas", "Azul", "M", "Pantalon joggin", 3);
$objProducto2= new Producto(0002, "Puma", "Verde", "S", "Camiseta", 5);
$objProducto3= new Producto(0003, "Nike", "Blanco", "42", "Zapatillas deportivas", 2);
$objProducto4= new Producto(0004, "Lacoste", "Violeta", "XL", "Chomba", 4);
$colProductos=[$objProducto1, $objProducto2, $objProducto3, $objProducto4];

$objTienda= new Tienda("La Saladita", "San Martin 123", 4983796, $colProductos, []);

$arregloAsociativo1=[
    "codigoBarra"=>0001,
    "cantidad"=>5];
$arregloAsociativo2=[
    "codigoBarra"=>0002,
    "cantidad"=>3];
$arregloAsociativo3=[
    "codigoBarra"=>0003,
    "cantidad"=>1];
$unArreglo=[];
$unArreglo[0]=$arregloAsociativo1;
$unArreglo[1]=$arregloAsociativo2;
$unArreglo[2]=$arregloAsociativo3;
?>