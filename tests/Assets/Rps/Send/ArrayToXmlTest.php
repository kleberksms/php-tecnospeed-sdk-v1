<?php

use Tecnospeed\Assets\Rps\Send\ArrayToXml;

class ArrayToXmlTest extends PHPUnit_Framework_TestCase{



    public function testIfExistConstructor()
    {
        $aTx = new ArrayToXml(array('test'));
        $this->assertInstanceOf('Tecnospeed\Assets\Rps\Send\ArrayToXml',$aTx,'is not a Instance of ArrayToXml');
    }


} 