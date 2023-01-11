<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );
require_once 'Base_Controller.php';
class pasien extends Base_Controller {
//field tabel
    var $data = [
        'no_rm' => '',
        'nama' => '',
        'alamat' => '',
        'tanggal_lahir' => '',
        'jenis_kelamin' => '',
        'diagnosa' => '',
        'no_ruang' => '',
        'jam' => '',
        'tindakan' => '',
        'keterangan' => '',
        'id_dokter' => '',
        'departemen' => '',
        'nama_dokter' => '',
    ];

    //nama model
    var $context = 'pasien';
    public function __construct() {
        parent::__construct();
        $this->load->model( 'dokter_model', 'dokter' );
    }
    function form() {
        $id = $this->uri->segment( 3 );
        if ( $id ) {
            $this->data = $this->pasien->find_by_id( $id );
        }
        $this->data['dokters'] = $this->dokter->find_all();
        $this->load->view( 'pasien/form', $this->data );
    }

    function save() {
        $id = $this->input->post( 'id' );
        $this->form_validation->set_rules( 'nama', 'nama', 'required' );
        $this->data = [
            'no_rm' => $this->input->post( 'no_rm' ),
            'nama' => $this->input->post( 'nama' ),
            'alamat' => $this->input->post( 'alamat' ),
            'tanggal_lahir' => $this->input->post( 'tanggal_lahir' ),
            'jenis_kelamin' => $this->input->post( 'jenis_kelamin' ),
            'diagnosa' => $this->input->post( 'diagnosa' ),
            'no_ruang' => $this->input->post( 'no_ruang' ),
            'jam' => $this->input->post( 'jam' ),
            'tindakan' => $this->input->post( 'tindakan' ),
            'keterangan' => $this->input->post( 'keterangan' ),
            'id_dokter' => $this->input->post( 'id_dokter' ),
        ];

        // //handling upload
        // if ( $_FILES['gambar']['name'] != "" ) {
        //     $config = array(
        //         'upload_path' => "./assets/uploads/",
        //         'allowed_types' => "*"
        //         ,
        //         'overwrite' => TRUE,
        //         'file_name' => "gambar_" . date( 'YmdHis' ),
        //         'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        //     );
        //     $this->load->library( 'upload', $config );
        //     if ( $this->upload->do_upload( 'gambar' ) ) {
        //         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
        //         $file_name = $upload_data['file_name'];
        //     } else {
        //         log_message( 'ERROR', 'error' );
        //     }
        // }
        // $this->data['gambar'] = $file_name;

        if ( $this->form_validation->run() == FALSE ) {
            $this->form();
        } else {
            if ( $id == '' ) {
                $this->pasien->insert( $this->data );
            } else {
                $this->pasien->update( $id, $this->data );
            }
            redirect( base_url( 'pasien' ) );
        }
    }
}
?>