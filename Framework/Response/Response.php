<?php

declare(strict_types=1);

namespace Septillion\Framework\Response;


use Septillion\Framework\Helper\AssociativeArray;

class Response
{
    private string $_content;
    private AssociativeArray $_headers;

    public function __construct(?string $content = '')
    {
        $this->setContent($content);
    }


    public function setContent(?string $content): Response
    {
        $this->_content = $content ?? '';
        return $this;
    }

    public function getContent()
    {
        header('Content-Type: text/html');
        return json_encode($this->_content, JSON_THROW_ON_ERROR, 512);
    }

    public function __toString()
    {
        return $this->getContent();
    }
}