<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 20:08
 */

namespace Ofertaski;

require_once "GestionAnuncios.php";
require_once "AnunciosImp.php";

class FormularioOferta extends GestionAnuncios
{
    public function __construct(AnunciosImp $implementacion)
    {
        parent::__construct($implementacion);
    }

    public function crearAnuncio($modelo)
    {
        $this->modelo = $modelo;
        return $this->implementacion->crear($modelo);
    }

    public function editarAnuncio($id, $modelo)
    {
        return $this->implementacion->editar($id, $modelo);
    }
}