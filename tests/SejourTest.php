<?php

namespace App\Tests;
use App\Entity\Sejour;
use PHPUnit\Framework\TestCase;

class SejourTest extends TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true);
    }

	/**
     * @varsejour
     */
	protected $object;
	/**
     * Sets up the fixture, for example, opens a network connection.
     * This methodiscalledbefore a test isexecuted.
     */
	protected function setUp()
    	{
        // $this->object = new Sejour(1, 'Classe de mer', 170, '2016-05-02', 10);
        $this->object = new Sejour();
        $this->object->setSEJDTEDEB(new \DateTime('2016-05-02'));
        $this->object->setSEJDUREE(10);

   	 }
	/**
     * Tears down the fixture, for example, closes a network connection.
     * This methodiscalledafter a test isexecuted.
     */
	protected function tearDown()
    {
    }
     /**
     * Test de la m�thode getSejDteFin de la classe Sejour
     */
	public function testDteFin()
    {
	$this->setUp();

	$resultatAttendu = new \Datetime('2016-05-12');
	$resultatObserve = $this->object->_getSejDteFin();

	$this->assertEquals($resultatAttendu, $resultatObserve);

    }
    public function testDteFormatFR()
    {

    $resultatAttendu = '12/05/2016';
    $valeurTest='2016/05/12';
	$resultatObserve = $this->object->_getSejDteFormatFR($valeurTest);

	$this->assertEquals($resultatAttendu, $resultatObserve);

    }

}
?>
