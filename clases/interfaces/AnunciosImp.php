<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 7/10/2016
 * Hora: 20:36
 */

namespace clases\interfaces;

/**
 * Interface AnunciosImp
 * @package clases\interfaces
 */
interface AnunciosImp
{
    /**
     * Implementación para crear
     * @param $modelo
     * @return mixed
     */
    public function crear($modelo);

    /**
     * Implementación para editar
     * @param $id
     * @param $modelo
     * @return mixed
     */
    public function editar($id, $modelo);
}