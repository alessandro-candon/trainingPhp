<?php

namespace src;

use SimpleXMLElement;

require_once __DIR__ . '/../bootstrap.php';

class XmlParser implements Loader
{

    /** @var  string */
    protected $content;

    public function load(string $path)
    {
        $this->content = \file_get_contents($path);
        return $this;

    }
    public function parse()
    {
        if($this->content && '' != $this->content) {
            return new SimpleXMLElement($this->content);;
        }
        return null;

    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return XmlParser
     */
    public function setContent(string $content): XmlParser
    {
        $this->content = $content;
        return $this;
    }

}