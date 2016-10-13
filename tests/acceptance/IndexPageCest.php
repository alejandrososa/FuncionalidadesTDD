<?php

class IndexPageCest
{
    protected $demo;

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    protected function _inject(){
        $this->demo = 'Resultado crear anuncio';
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('quiero crear un anuncio');
        $I->amOnPage('/');
        $I->see($this->demo);
    }
}
