<?php namespace IndyLaravel\Feedr;

use \Illuminate\Support\Facades\Config;
use \Illuminate\View\Environment as ViewEnvironment;

class Feedr {
    private $view = null;

    public function __construct(ViewEnvironment $view)
    {
        $this->view = $view;
    }

    /**
     * Shows Feedr
     * @return string
     */
    public function show()
    {
        return $this->view->make('feedr::show');
    }
}