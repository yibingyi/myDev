<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PageDemo extends CI_Controller {

    public function index() {
        var_dump($_POST);
        $this->load->view();
    }

}
