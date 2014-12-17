<?php

use Tecnospeed\NF;

class NFTest extends PHPUnit_Framework_TestCase
{
    public $nf;

    public function setUp()
    {
        $this->nf = new NF();
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Empty array
     */
    public function testContentMethodException()
    {
        $this->nf = new NF();
        $this->nf->content(array());
    }

} 