<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Foo extends CI_Controller {

    public function index() {
        $this->load->view('page_demo');
    }

}
