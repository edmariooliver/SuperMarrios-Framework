<?php

namespace SM\Core;

use SM\Modules\Http\Request\Request;
use SM\Modules\Http\Response\Response;
use SM\Modules\Loaders\HelperLoader;


class SMController
{

    /**
     * @var Object SM\Modules\Http\Request\Request
     */
    public $request;

    /**
     * @var Object SM\Modules\Loaders\HelperLoader;
     */
    public $helper;

    /**
     * @var Object SM\Modules\Http\Response\Response;
     */
    public $response;

    public function __construct()
    {
        $this->request          = new Request();
        $this->helper           = new HelperLoader();
        $this->response         = new Response();
    }
}
