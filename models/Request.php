<?php

/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 14/06/2017
 * Time: 14:22
 */
class Request
{
    protected $_endpoint = null;

    protected $_fq = null;


    public function __construct($options)
    {
        if (isset($options->endpoint)) {
            $this->_endpoint = $options->endpoint;
        }

        if (isset($options->set)) {
            $this->_fq = $options->set;
        }
    }

    /**
     * @param $halId
     * @return Document|null
     */
    public function getDocument($halId)
    {
        $result = file_get_contents($this->_endpoint . 'q=*%3A*&fq=halId_s:' . $halId . '&fl=*&rows=1&wt=json&indent=true');
        if ($result) {
            $result = json_decode($result);
            return new Document($result->response->docs[0]);
        }
        return null;
    }

    /**
     * @param $q
     * @return null|Result
     */
    public function search($q)
    {
        $result = file_get_contents($this->_endpoint . 'q=' . $q . '%3A*&&rows=50&wt=json&indent=true');
        if ($result) {
            $result = json_decode($result);
            return new Result($result->response);
        }
        return null;
    }


}