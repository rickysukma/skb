<?php
class M_identitas extends CI_Model{

	function data(){
        $query = $this->db->query('SELECT * FROM tbl_identitas LIMIT 1');
        return $row = $query->row();
    }
	

}
