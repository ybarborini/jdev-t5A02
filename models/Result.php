<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 19/06/2017
 * Time: 15:27
 */

class Result
{
    protected $_solrDocuments = '';

    protected $_solrFacet = '';


    public function __construct($solrReturn)
    {
        $this->_solrDocuments = $solrReturn->response;
        $this->_solrFacet = $solrReturn->facet_counts;
    }

    public function getNbResult()
    {
        return $this->getAttribut('numFound');
    }

    public function getDocuments()
    {
        return $this->getAttribut('docs');
    }

    public function getFacet($facet)
    {
        if (isset($this->_solrFacet->facet_fields->{$facet})) {
            return $this->_solrFacet->facet_fields->{$facet};
        }
    }

    protected function getAttribut($name)
    {
        if (isset($this->_solrDocuments->{$name})) {
            return $this->_solrDocuments->{$name};
        }
        return null;
    }
}