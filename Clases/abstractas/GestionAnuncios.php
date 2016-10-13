<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 19:41
 */

namespace clases\abstractas;

use clases\interfaces\AnunciosImp;

/**
 * Class GestionAnuncios
 * @package clases\abstractas
 */
abstract class GestionAnuncios
{
    /**
     * @var string
     */
    protected $modelo;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var AnunciosImp
     */
    protected $implementacion;

    /**
     * GestionAnuncios constructor.
     * @param AnunciosImp $implementacion
     */
    public function __construct(AnunciosImp $implementacion)
    {
        $this->implementacion = $implementacion;
    }

    /**
     * Crear anuncio
     * @param $modelo
     * @return mixed
     */
    abstract public function crearAnuncio($modelo);

    /**
     * Editar anuncio
     * @param $id
     * @param $modelo
     * @return mixed
     */
    abstract public function editarAnuncio($id, $modelo);
}