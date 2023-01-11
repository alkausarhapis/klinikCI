<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

require_once 'Base_Controller.php';

class Medis extends CI_Controller {
    public function index() {
        $this->load->view( "fragment/header" );
        $this->load->view( "fragment/menu" );
        $this->load->view( "medis/index" );
    }
}