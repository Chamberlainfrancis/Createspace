<?php declare(strict_types = 1);

namespace Createspace\Controllers;

use Http\Request;
use Http\Response;

class Homepage
{
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function show()
    {
        $content = '<h1>Hello World, Test App</h1>';
        $content .= 'Parameter Hello ' . $this->request->getParameter('name', 'stranger');
        $this->response->setContent($content);

        foreach ($this->response->getHeaders() as $header) {
            header($header, false);
        }

        echo $this->response->getContent();
    }
}