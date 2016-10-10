<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 19:41
 */

namespace Ofertaski;

require_once "AnunciosImp.php";

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

    public function __construct(AnunciosImp $implementacion)
    {
        $this->implementacion = $implementacion;
    }

    abstract public function crearAnuncio($modelo);
    abstract public function editarAnuncio($id, $modelo);
}