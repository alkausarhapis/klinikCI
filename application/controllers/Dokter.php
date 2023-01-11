<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

require_once 'Base_Controller.php';

class Dokter extends Base_Controller {

    //field tabel
    var $data = [
        'id' => '',
        'id_departemen' => '',
        'nama' => '',
        'alamat' => '',
        'tgl_lahir' => '',
    ];

    //nama model
    var $context = 'dokter';

    function form() {
        $pengenal = $this->uri->segment( 3 );
        if ( $pengenal ) {
            $this->data = $this->dokter->find_by_id( $pengenal );
        }
        $this->load->view( 'dokter/form', $this->data );
    }

    function save() {
        $this->form_validation->set_rules( 'id', 'id dokter', 'required' );
        $this->form_validation->set_rules( 'id_departemen', 'id_departemen', 'required' );
        $this->form_validation->set_rules( 'nama', 'nama dokter', 'required' );
        $this->data = [
            'id' => $this->input->post( 'id' ),
            'id_departemen' => $this->input->post( 'id_departemen' ),
            'nama' => $this->input->post( 'nama' ),
            'alamat' => $this->input->post( 'alamat' ),
            'tgl_lahir' => $this->input->post( 'tgl_lahir' ),
        ];
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view( 'dokter/form', $this->data );
        } else {
            $this->dokter->insert( $this->data );
            redirect( base_url( 'dokter' ) );
        }
    }

}