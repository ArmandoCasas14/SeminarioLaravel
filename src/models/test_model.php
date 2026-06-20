<?php
require_once 'UserModel.php';
$model = new UserModel();

// Probar getAll
echo "<h2>Listado desde Modelo</h2>";
$users = $model->getAll();
foreach ($users as $u) {
    echo "{$u['nombre']} - {$u['email']} <br>";
}

// Probar create
// $model->create("Pedro Test", "pedro@test.com");
 //echo "Usuario creado!";
?>