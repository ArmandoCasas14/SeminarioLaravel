<?php
function calcularPrecioFinal($precio,$iva=0.19){
    return $precio * (1+$iva);
}
$inventario=[
    "Laptop"=>1200,
    "Mouse"=>25,
    "Teclado"=>45,
    "Monitor"=>300,
];
echo "<h2>LPrecios co Iva Incluido</h2>";
foreach($inventario as $nombre=>$precio){
    $precioFinal=calcularPrecioFinal($precio);

    if($precioFinal>100){
        echo "<p><strong style='color:red'>$nombre: $$precioFinal (Caro)</strong></p>";
    } else{
        echo "<p>$nombre: $$precioFinal (Economico)</p>";
    }
}

$edades = [12, 25, 17, 30, 15];
function esMayorDeEdad($edad){
    if($edad>=18){
        echo "La persona con edad $edad es MAYOR de edad";
    }else{
        echo "La persona con edad $edad es Menor de edad";
    }
}
foreach($edades as $edad){
    esMayorDeEdad($edad);
    echo "<br>";
}

?>