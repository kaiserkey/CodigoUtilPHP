<?

// alícuota del IVA (en porcentaje)
$alicuota_iva = 21;
// Datos del producto
$codigo_de_producto = 1284;
$nombre_producto = "Agua Mineral Manantial x 500 ml";
$precio_bruto = 3.75; # precio sin IVA
// Cálculos relacionados al IVA
$iva = 3.75 * 21 / 100;
$precio_neto = $precio_bruto + $iva; # Precio con IVA incluido

# TODO calcular descuentos por cantidad

/**
*TODO calcular descuentos por cantidad
*para ello, tener en cuenta los siguientes porcentajes
*de descuento:
*1 a 5 productos: 0%
*6 a 10 productos: 2.5%
*11 a 25 productos: 6.2%
*Más de 25: 10%
*/

?>