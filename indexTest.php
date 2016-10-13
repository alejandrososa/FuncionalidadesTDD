<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 10/10/2016
 * Hora: 21:58
 */

namespace clases\tests;

use clases\concretas\FormularioArticulo;
use clases\concretas\FormularioOferta;
use clases\implementaciones\ArticulosImp;
use clases\implementaciones\OfertasImp;

/**
 * Class indexTest
 * @package clases\tests
 */
class indexTest extends \PHPUnit_Framework_TestCase
{
    public function testAnunciosImpPuedeCrearArticulos()
    {
        $anuncios = new FormularioArticulo(new ArticulosImp());
        $this->assertEquals('Articulo: lavadora', $anuncios->crearAnuncio('lavadora'));
    }

    public function testAnunciosImpPuedeEditarArticulos()
    {
        $anuncios = new FormularioArticulo(new ArticulosImp());
        $this->assertEquals('Articulo id: 5, modelo: lavadora', $anuncios->editarAnuncio(5,'lavadora'));
    }

    public function testAnunciosImpPuedeCrearOfertas()
    {
        $anuncios = new FormularioArticulo(new OfertasImp());
        $this->assertEquals('Oferta: Fin de semana en crucero atlantis',
            $anuncios->crearAnuncio('Fin de semana en crucero atlantis'));
    }

    public function testAnunciosImpPuedeEditarOfertas()
    {
        $anuncios = new FormularioOferta(new OfertasImp());
        $this->assertEquals('Oferta id: 1, modelo: Cena en Wooks para 2',
            $anuncios->editarAnuncio(1,'Cena en Wooks para 2'));
    }
}
