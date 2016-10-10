<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 7/10/2016
 * Hora: 20:36
 */

namespace Ofertaski;


interface AnunciosImp
{
    public function crear($modelo);
    public function editar($id, $modelo);
}