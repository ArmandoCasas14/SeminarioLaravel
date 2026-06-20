<?php
$Productos=[
    "Laptop"=>1200,
    "Mouse"=>25,
    "Teclado"=>45,
    "Monitor"=>300,
];
echo "<h2>Lista de productos</h2>";
echo "<ul>";
$total=0;
foreach($Productos as $nombre=>$precio){
    echo "<li> $nombre: $$precio</li>";
    $total +=$precio;
}
$totalConIva = $total * 1.19;
echo "<ul>";
echo "<p><strong>Total sin IVA: $$total</Strong></p>";
echo "<p><strong>Total con IVA: $$totalConIva</Strong></p>";
?>