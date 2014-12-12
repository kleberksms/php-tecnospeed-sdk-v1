<?php


class ManagerNfTest extends PHPUnit_Framework_TestCase{

    public $managerNf;

    public function setUp()
    {
        $this->managerNf = new Tecnospeed\ManagerNf();
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('Tecnospeed\ManagerNf',$this->managerNf);
    }

    public function testIfAllMethodsExistForCredentials()
    {

        $this->assertTrue(
            method_exists($this->managerNf, 'setType'),
            'Class does not have method setType'
        );

        $this->assertTrue(
            method_exists($this->managerNf, 'setPattern'),
            'Class does not have method setPattern'
        );

        $this->assertTrue(
            method_exists($this->managerNf, 'setDefaultCity'),
            'Class does not have method setDefaultCity'
        );

        $this->assertTrue(
            method_exists($this->managerNf, 'getType'),
            'Class does not have method setType'
        );

        $this->assertTrue(
            method_exists($this->managerNf, 'getPattern'),
            'Class does not have method setPattern'
        );

        $this->assertTrue(
            method_exists($this->managerNf, 'getDefaultCity'),
            'Class does not have method setDefaultCity'
        );

    }


} 