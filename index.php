<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 9/10/2016
 * Hora: 20:55
 */

namespace Funcionalidades;

require_once __DIR__.'/vendor/autoload.php';

use helpers\Herramientas;
use clases\concretas\FormularioArticulo;
use clases\implementaciones\ArticulosImp;
use clases\implementaciones\OfertasImp;


$formArticulo = new FormularioArticulo(new ArticulosImp());
$result = $formArticulo->crearAnuncio('lavadora');
echo '<pre>';print_r([__LINE__, 'Resultado crear anuncio',$result]);

$anuncios = new FormularioArticulo(new ArticulosImp());
$result = $anuncios->editarAnuncio(5,'lavadora');
echo '<pre>';print_r([__LINE__, 'Resultado editar anuncio',$result]);

$anuncios = new FormularioArticulo(new OfertasImp());
$result = $anuncios->crearAnuncio('Fin de semana en crucero atlantis');
echo '<pre>';print_r([__LINE__, 'Resultado crear anuncio',$result]);

$anuncios = new FormularioArticulo(new OfertasImp());
$result = $anuncios->editarAnuncio(1,'Cena en Wooks para 2');
echo '<pre>';print_r([__LINE__, 'Resultado editar anuncio',$result]);