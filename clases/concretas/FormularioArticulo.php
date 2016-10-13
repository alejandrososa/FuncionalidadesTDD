<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 20:08
 */

namespace clases\concretas;

use clases\abstractas\GestionAnuncios;
use clases\interfaces\AnunciosImp;

/**
 * Class FormularioArticulo
 * @package clases\concretas
 */
class FormularioArticulo extends GestionAnuncios
{
    /**
     * FormularioArticulo constructor.
     * @param AnunciosImp $implementacion
     */
    public function __construct(AnunciosImp $implementacion)
    {
        parent::__construct($implementacion);
    }

    /**
     * Crear anuncio
     * @param $modelo
     * @return mixed
     */
    public function crearAnuncio($modelo)
    {
        $this->modelo = $modelo;
        return $this->implementacion->crear($modelo);
    }

    /**
     * Editar anuncio
     * @param $id
     * @param $modelo
     * @return mixed
     */
    public function editarAnuncio($id, $modelo)
    {
        return $this->implementacion->editar($id, $modelo);
    }
}