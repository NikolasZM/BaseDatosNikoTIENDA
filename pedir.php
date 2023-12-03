<?php

try{

    $conexion = new PDO('mysql:host=localhost;port=3306;dbname=tiendajuegos1' , 'root' , '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $res = $conexion->query('SELECT * FROM juego') or die(print($conexion->errorInfo()));
    $data = [];

    while($item = $res->fetch(PDO::FETCH_OBJ)) {
        $data[] = [
            'nombre' => $item->nombre,
            'precio' => $item->precio,
            'clasificacion' => $item->clasificacion,
            'img_link' => $item->img_link
        ];
    }

    echo json_encode($data);

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}