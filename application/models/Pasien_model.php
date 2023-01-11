<?php
require_once 'Base_model.php';

class Pasien_model extends Base_Model {
    //nama tabel
    var $table = "tbl_tindakan";

    public function find_all() {
        return $this->db->query( "SELECT tbl_tindakan.*,tbl_dokter.nama as nama_dokter, tbl_dokter.id_departemen as departemen
        FROM tbl_tindakan
        INNER JOIN tbl_dokter ON tbl_dokter.id = tbl_tindakan.id_dokter" )->result_array();
    }

    public function find_by_id( $id ) {
        return $this->db->query( "SELECT tbl_tindakan.*,tbl_dokter.nama as nama_dokter, tbl_dokter.id_departemen as departemen
        FROM tbl_tindakan
        INNER JOIN tbl_dokter ON tbl_dokter.id = tbl_tindakan.id_dokter
        WHERE tbl_tindakan.id='$id'" )->row_array();
    }

    public function pagination( $limit, $start ) {
        return $this->db->query( "SELECT tbl_tindakan.*,tbl_dokter.nama as nama_dokter, tbl_dokter.id_departemen as departemen
        FROM tbl_tindakan
        INNER JOIN tbl_dokter ON tbl_dokter.id = tbl_tindakan.id_dokter LIMIT $start,$limit" )->result_array();
    }

    public function search( $kw, $limit, $start ) {
        if ( $kw != '' ) {
            return $this->db->query( "SELECT tbl_tindakan.*,tbl_dokter.nama as nama_dokter, tbl_dokter.id_departemen as departemen
            FROM tbl_tindakan
            INNER JOIN tbl_dokter ON tbl_dokter.id = tbl_tindakan.id_dokter WHERE tbl_tindakan.nama LIKE '%$kw%' LIMIT $start,$limit" )->result_array();
        }
        return $this->pagination( $limit, $start );
    }

    public function get_total_search( $kw ) {
        $rows = $this->db->query( "SELECT tbl_tindakan.*,tbl_dokter.nama as nama_dokter
        FROM tbl_tindakan
        INNER JOIN tbl_dokter ON tbl_dokter.id = tbl_tindakan.id_dokter WHERE tbl_tindakan.nama LIKE '%$kw%'" )->result_array();

        return count( $rows );
    }

}