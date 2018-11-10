<?php

namespace Parsec\Controller;

use Symfony\Component\HttpFoundation\Request;

class ContentController{
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function index()
    {
        dd($this->request);
    }
}