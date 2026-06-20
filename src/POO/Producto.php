<?php
class Producto {
    // Atributos (privados para protegerlos)
    private $nombre;
    private $precio;
    private $iva;
    private $categoria;

    // Constructor: se ejecuta al crear el objeto
    public function __construct($nombre, $precio, $iva = 0.19,$categoria="") {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;
        $this->categoria=$categoria;

    }

    // Métodos públicos para interactuar
    public function getPrecioFinal() {
        return $this->precio * (1 + $this->iva);
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getCategoria() {
        return $this->categoria;
    }

    // Método adicional para mostrar info formateada
    public function getInfo() {
        return "Producto: {$this->nombre} | Categoria:
    {$this->categoria}|Precio Final: $" . $this->getPrecioFinal();
    }
}
?>