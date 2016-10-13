<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 19:25
 */

namespace Clases\implementaciones;

use Helpers\Herramientas;
use Clases\interfaces\AnunciosImp;

/**
 * Class ArticulosImp
 * @package Clases\implementaciones
 */
class ArticulosImp implements AnunciosImp
{
    /**
     * Implementación para crear
     * @param $modelo
     * @return mixed
     */
    public function crear($modelo)
    {
        Herramientas::println("Articulo: $modelo");
        return "Articulo: $modelo";
    }

    /**
     * Implementación para editar
     * @param $id
     * @param $modelo
     * @return mixed
     */
    public function editar($id, $modelo)
    {
        Herramientas::println("Articulo id: $id, modelo: $modelo");
        return "Articulo id: $id, modelo: $modelo";
    }
}