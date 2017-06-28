<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 19/06/2017
 * Time: 15:27
 */

class Result
{
    protected $_solrReturn = '';


    public function __construct($solrReturn)
    {
        $this->_solrReturn = $solrReturn;
        var_dump($solrReturn);
    }

    public function get()
    {
        return $this->_solrReturn;
    }

    public function getNbResult()
    {
        return $this->getAttribut('numFound');
    }

    public function getDocuments()
    {
        return $this->getAttribut('docs');
    }

    protected function getAttribut($name)
    {
        if (isset($this->_solrReturn->{$name})) {
            return $this->_solrReturn->{$name};
        }
        return null;
    }
}