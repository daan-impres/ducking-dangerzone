<?php

require_once 'demoClass.php';

class demoClassTest extends PHPunit_Framework_TestCase
{

    public $demoInstance;

    /**
     * Set up the test
     * 
     * @return void
     */
    public function setUp() 
    {
        $this->demoInstance = new demoClass();
    }

    
    /**
     * Check if parameters can be set
     *
     * @return boolean
     */
    public function testCanSetParams()
    {
        $params = array(
            'test'
        );
        $this->demoInstance->setParams($params);

        $paramsTest = $this->demoInstance->getParams();

        return $this->assertEquals($params[0], $paramsTest[0]);
    }

    /**
     * Check if the parameters can be cleared
     *
     * @return boolean
     */
    public function testCanFlushParams()
    {
        $params = array(
            'test'  
        );
        
        $this->demoInstance->setParams($params);
        $this->demoInstance->flushParams();

        $params = $this->demoInstance->getParams();

        return $this->assertEmpty($params);
    }
}
