<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 20:55
 */

namespace Ofertaski;

use Ofertaski\FormularioArticulo;
require_once "Herramientas.php";
require_once "FormularioArticulo.php";
require_once "ArticulosImp.php";
require_once "OfertasImp.php";

$formArticulo = new FormularioArticulo(new ArticulosImp());
$formArticulo->crearAnuncio('lavadora');