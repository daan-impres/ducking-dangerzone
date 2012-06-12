<?php

class DemoClass 
{
    /**
     * array to contain some parameters
     *
     * @var array
     */
    public $params = array();

    /**
     * Constructor sets the params
     *
     * @return void
     */
    public function __construct()
    {
        $this->params = array(
            'foo',
            'bar',
        );
    }

    /**
     * Check if the parameter is an array or not
     *
     * @return array
     */
    public function getParams() 
    {
        return $this->params;
    }

    /**
     * Clear all params 
     *
     * @return void
     */
    public function flushParams()
    {
        $this->params = array();
    }

    /**
     * Sets the parameter
     *
     * @return void
     */
    public function setParams($params = array())
    {
        $this->params = $params;
    }
}
