<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 19:25
 */

namespace Ofertaski;

use Ofertaski;

require_once "Herramientas.php";
require_once "AnunciosImp.php";


class OfertasImp implements AnunciosImp
{

    public function crear($modelo)
    {
        \Herramientas::println("Oferta: $modelo");
        return "Oferta: $modelo";
    }

    public function editar($id, $modelo)
    {
        \Herramientas::println("Oferta id: $id, modelo: $modelo");
        return "Oferta id: $id, modelo: $modelo";
    }
}