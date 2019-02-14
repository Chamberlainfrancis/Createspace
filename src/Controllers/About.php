<?php declare(strict_types = 1);

namespace Createspace\Controllers;

use Http\Request;
use Http\Response;
use Createspace\Template\FrontendRenderer;

class About
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(
        Request $request, 
        Response $response,
        FrontendRenderer $renderer
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->FrontendRenderer = $renderer;
    }
	public function show()
    {
        $data = [
			'name' => $this->request->getParameter('name', 'stranger'),
		];
        $html = $this->FrontendRenderer->render('About', $data);
        $this->response->setContent($html);
    }
}
