<?php

use Tecnospeed\NF;

use Tecnospeed\Assets\SendParams;


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

    public function testArrayContentExist()
    {

        $content = array(
            'ValorCOFINS' => '123',
            'DescontoCondicionado' => '123'
        );

        $nf = new NF();
        $this->assertTrue($nf->content($content),'Error to hydrate');


    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Invalid Argument
     */
    public function testIfNotExistParamsContentInDefaultParams()
    {
        $nf = new NF();
        $nf->content(
            array(
                'Valor Nao Existente' => '123',
                'DescontoCondicionado'=> '123'
            )
        );
    }


} 