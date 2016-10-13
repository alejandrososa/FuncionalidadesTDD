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
 * Class OfertasImp
 * @package Clases\implementaciones
 */
class OfertasImp implements AnunciosImp
{
    /**
     * Implementación para crear
     * @param $modelo
     * @return mixed
     */
    public function crear($modelo)
    {
        Herramientas::println("Oferta: $modelo");
        return "Oferta: $modelo";
    }

    /**
     * Implementación para editar
     * @param $id
     * @param $modelo
     * @return mixed
     */
    public function editar($id, $modelo)
    {
        Herramientas::println("Oferta id: $id, modelo: $modelo");
        return "Oferta id: $id, modelo: $modelo";
    }
}