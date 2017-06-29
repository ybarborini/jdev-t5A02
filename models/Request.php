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
        $result = file_get_contents($this->_endpoint . 'q=*:*&fq=halId_s:' . $halId . '&fl=*&rows=1&wt=json&indent=true');
        if ($result) {
            $result = json_decode($result);
            if (isset($result->response->docs[0])) {
                return new Document($result->response->docs[0]);
            }
        }
        return null;
    }

    /**
     * @param $q
     * @return null|Result
     */
    public function search($q, $fq = [] )
    {
        $request = $this->_endpoint;
        $request .= 'q=' . urlencode($q) . '&';
        if ($fq) {
            foreach ($fq as $filter) {
                $request .= 'fq=' . urlencode($filter) . '&';
            }
        }
        $request .= 'rows=20&';
        $request .= 'fl=halId_s,uri_s,submitType_s,label_s,docType_s&';
        $request .= 'facet=true&facet.field=docType_s&facet.field=primaryDomain_s&facet.field=authFullName_s&facet.mincount=1&json.nl=map&facet.limit=10';

        $result = file_get_contents( $request );
        if ($result) {
            $result = json_decode($result);
            return new Result($result);
        }
        return null;
    }

}