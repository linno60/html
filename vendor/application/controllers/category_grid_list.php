<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_grid_list extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('category_grid_list');
    }

}

