<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('shopping_cart');
    }

}

