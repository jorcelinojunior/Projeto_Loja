<?php
/**
 * Created by PhpStorm.
 * User: jorce
 * Date: 13/11/2016
 * Time: 13:30
 */

function listaCategorias($conexao){
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao,$query);
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}