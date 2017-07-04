<?php

/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 14/06/2017
 * Time: 14:22
 */
class Request
{
    /**
     * @var string API endpoint
     */
    protected $_endpoint = null;

    public function __construct($endpoint)
    {
        $this->_endpoint = $endpoint;
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

}