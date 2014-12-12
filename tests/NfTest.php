<?php


class NfTest extends PHPUnit_Framework_TestCase{


    public $nf;

    public function setUp()
    {
        $this->nf = new Tecnospeed\Nf();
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('Tecnospeed\Nf',$this->nf);
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




} 