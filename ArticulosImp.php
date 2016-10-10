<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 19:25
 */

namespace Ofertaski;

require_once "Herramientas.php";
require_once "AnunciosImp.php";


class ArticulosImp implements AnunciosImp
{

    public function crear($modelo)
    {
        \Herramientas::println("Articulo: $modelo");
        return "Articulo: $modelo";
    }

    public function editar($id, $modelo)
    {
        \Herramientas::println("Articulo id: $id, modelo: $modelo");
        return "Articulo id: $id, modelo: $modelo";
    }
}