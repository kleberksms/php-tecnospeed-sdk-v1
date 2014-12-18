<?php

namespace Tecnospeed\Entity;

class SendTest extends \PHPUnit_Framework_TestCase{


    public $nf;

    public function setUp()
    {
        $this->nf = new Send();
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('Tecnospeed\Entity\Send',$this->nf);
    }

    public function testIfExistGetsAndSetsMethodsIdLote()
    {
        $this->assertTrue(
            method_exists($this->nf, 'setIdLote'),
            'Class does not have method setIdLote');

        $this->assertTrue(
            method_exists($this->nf, 'getIdLote'),
            'Class does not have method getIdLote');
    }

    public function testIfExistGetsAndSetsDataInicio()
    {
        $this->assertTrue(
            method_exists($this->nf, 'setDataInicio'),
            'Class does not have method setDataInicio');

        $this->assertTrue(
            method_exists($this->nf, 'getDataInicio'),
            'Class does not have method getDataInicio');
    }

    public function testIfIdLoteIsANumber()
    {
        $send = new Send();
        $send->setIdLote(1);
        $this->assertTrue(is_numeric($send->getIdLote()),'not is a number');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testIfIdLoteReciveNotANumber()
    {
        $send = new Send();
        $send->setIdLote('teste');
    }

    public function testIfIsAValidNumberOnExigibilidadeISS()
    {
        $send = new Send();
        $send->setExigibilidadeISS(2);
        $this->assertEquals(2,$send->getExigibilidadeISS());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument, choice between 1 and 7
     * 1 - Exigível
     * 2 - Não incidência
     * 3 - Isenção
     * 4 - Exportação
     * 5 - Imunidade
     * 6 - Exigibilidade Suspensa por Decisão Judicial
     * 7 - Exigibilidade Suspensa por Processo Administrativo.
     */
    public function testExceptionExigibilidadeISS()
    {
        $send = new Send();
        $send->setExigibilidadeISS(8);
    }

    public function testDddTomador()
    {
        $send = new Send();
        $send->setDddTomador('41');
        $this->assertEquals('41', $send->getDddTomador());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid ddd number
     */
    public function testIfDDDTomadorExpectedTwoNumbers()
    {
        $send = new Send();
        $send->setDddTomador('1234');
    }

    public function testIfSetCodigoTributacaoMunicipioIsANumber()
    {
        $send = new Send();
        $send->setCodigoTributacaoMunicipio(12);
        $this->assertTrue(is_numeric($send->getCodigoTributacaoMunicipio()),'not is a number');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage this value is not a number
     */
    public function testExceptionSetCodigoTributacaoMunicipioreciviedAString()
    {
        $send = new Send();
        $send->setCodigoTributacaoMunicipio('String');
    }







} 