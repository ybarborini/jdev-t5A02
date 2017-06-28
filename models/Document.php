<?php

/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 14/06/2017
 * Time: 11:39
 */
class Document
{
    protected $_solrReturn = '';


    public function __construct($solrReturn)
    {
        $this->_solrReturn = $solrReturn;
    }

    public function getTitle()
    {
        $titles = $this->getAttribut('title_s');
        return $titles[0];
    }

    public function getSubmitType()
    {
        return $this->getAttribut('submitType_s');
    }

    public function getDoctype()
    {
        return $this->getAttribut('docType_s');
    }

    public function getAuthors()
    {
        return $this->getAttribut('authFullName_s');
    }

    public function getAbstract()
    {
        $abstracts = $this->getAttribut('abstract_s');
        return $abstracts[0];
    }

    public function getStructures()
    {
        return $this->getAttribut('structName_s');
    }

    public function getSubmittedDate()
    {
        return $this->getAttribut('submittedDate_s');
    }

    public function getthumbId()
    {
        return $this->getAttribut('thumbId_i');
    }

    public function getCitation()
    {
        return $this->getAttribut('citationFull_s');
    }

    public function getId()
    {
        return $this->getAttribut('halId_s');
    }

    public function getKeyword()
    {
        return $this->getAttribut('keyword_s');
    }

    public function getUri()
    {
        return $this->getAttribut('uri_s');
    }

    public function getUrlFile()
    {
        $files = $this->getAttribut('files_s');
        if (count($files)) {
            return $files[0];
        }
        return null;
    }

    public function getContributor()
    {
        return $this->getAttribut('contributorFullName_s');
    }

    public function getIdExt()
    {
        $arxiv = $this->getAttribut('arxivId_s');
        $doi = $this->getAttribut('doiId_s');
        $pubmed = $this->getAttribut('pubmedId_s');

        return array_values([$this->getId(), $arxiv, $doi, $pubmed]);
    }

    public function getRevue()
    {
        $revue = $this->getAttribut('journalTitle_s');
        if ($issn = $this->getAttribut('journalIssn_s')) {
            $revue .= '(ISSN: ' . $issn . ') ';
        }
        if ($vol = $this->getAttribut('volume_s')) {
            $revue .= 'vol. ' . $vol;
        }
        if ($pages = $this->getAttribut('page_s')) {
            $revue .= ', ' . $pages;
        }
        return $revue;
    }




    protected function getAttribut($name)
    {
        if (isset($this->_solrReturn->{$name})) {
            return $this->_solrReturn->{$name};
        }
        return null;
    }
}