<?php


namespace Content\Controllers;


use FastMicroKernel\Components\Controller;

class MyController extends Controller
{
    public function index() {
        $response = $this->getContainer()->get('contentService')->getContent();
        return $this->buildJsonResponse(200, $response);
    }
}