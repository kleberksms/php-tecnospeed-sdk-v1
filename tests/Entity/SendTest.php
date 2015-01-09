<?php

use Tecnospeed\Entity\Send;

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


    public function testIfExistGetsAndSetsMethodsIdRps()
    {
        $this->assertTrue(
            method_exists($this->nf, 'setIdRps'),
            'Class does not have method setIdRps');

        $this->assertTrue(
            method_exists($this->nf, 'getIdRps'),
            'Class does not have method getIdRps');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testExceptionSetIdRps()
    {
        $send = new Send();
        $send->setIdRps('String');
    }

    public function testIfExistGetsAndSetsMethodsIncentivadorCultural()
    {
        $this->assertTrue(
            method_exists($this->nf, 'setIncentivadorCultural'),
            'Class does not have method setIdRps');

        $this->assertTrue(
            method_exists($this->nf, 'getIncentivadorCultural'),
            'Class does not have method getIncentivadorCultural');
    }

    public function testIdRps()
    {
        $send = new Send();
        $send->setIdRps(1);
        $this->assertEquals(1,$send->getIdRps());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testExceptionSetIncentivadorCultural()
    {
        $send = new Send();
        $send->setIncentivadorCultural('String');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Number
     */
    public function testExceptionSetIncentivadorCulturalDifferentOneOrTwo()
    {
        $send = new Send();
        $send->setIncentivadorCultural(3);
    }

    public function testIncentivadorCultural()
    {
        $send = new Send();
        $send->setIncentivadorCultural(1);
        $this->assertEquals(1,$send->getIncentivadorCultural());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testExceptionSetIncentivoFiscal()
    {
        $send = new Send();
        $send->setIncentivoFiscal('String');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Number
     */
    public function testExceptionSetIncentivoFiscalDifferentOneOrTwo()
    {
        $send = new Send();
        $send->setIncentivoFiscal(3);
    }

    public function testIncentivoFiscal()
    {
        $send = new Send();
        $send->setIncentivoFiscal(1);
        $this->assertEquals(1,$send->getIncentivoFiscal());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testExceptionSOptantesSimplesNacional()
    {
        $send = new Send();
        $send->setOptanteSimplesNacional('String');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Number
     */
    public function testExceptionSetOptanteSimplesNacionalOneOrTwo()
    {
        $send = new Send();
        $send->setOptanteSimplesNacional(3);
    }

    public function testOptantesSimplesNacional()
    {
        $send = new Send();
        $send->setOptanteSimplesNacional(1);
        $this->assertEquals(1,$send->getOptanteSimplesNacional());
    }


    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testExceptionSetSituacaoNota()
    {
        $send = new Send();
        $send->setSituacaoNota('String');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid Number
     */
    public function testExceptionSetSituacaoNotaOneOrTwo()
    {
        $send = new Send();
        $send->setSituacaoNota(3);
    }

    public function testSituacaoNota()
    {
        $send = new Send();
        $send->setSituacaoNota(1);
        $this->assertEquals(1,$send->getSituacaoNota());
    }





} 