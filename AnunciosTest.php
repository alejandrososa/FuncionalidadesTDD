<?php
/**
 * Creado con PhpStorm.
 * FuncionalidadesOfertaski
 * Desarrollador: Alejandro Sosa
 * Fecha: 10/10/2016
 * Hora: 21:58
 */

namespace Ofertaski;

require_once "AnunciosImp.php";
require_once "FormularioArticulo.php";
require_once "FormularioOferta.php";
require_once "ArticulosImp.php";
require_once "OfertasImp.php";


class AnunciosTest extends \PHPUnit_Framework_TestCase
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
