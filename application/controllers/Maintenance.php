<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends Rest_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('menu');
	}
    // Handle an incoming GET - cRud
    function index_get()
    {
        $this->response('ok', 200);
    }

    // Handle an incoming PUT - crUd
    function index_put()
    {
        $this->response('ok', 200);
    }

    // Handle an incoming POST - Crud
    function index_post()
    {
        $this->response('ok', 200);
    }

    // Handle an incoming DELETE - cruD
    function index_delete()
    {
        $this->response('ok', 200);
    }
}