<?php
class M_kelompok extends CI_Model{

	function get_all_kelompok(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelompok ORDER BY id_kelompok ASC");
		return $hsl;
	}
	function simpan_kelompok($nama_kelompok,$slug){
		$hsl=$this->db->query("INSERT INTO tbl_kelompok (nama_kelompok,slug) values ('$nama_kelompok','$slug')");
		return $hsl;
	}
	function update_kelompok($nama_kelompok,$slug,$id_kelompok){
		$hsl=$this->db->query("update tbl_kelompok set nama_kelompok='$nama_kelompok', slug='$slug' where id_kelompok='$id_kelompok'");
		return $hsl;
	}
	function hapus_kelompok($id_kelompok){
		$hsl=$this->db->query("delete from tbl_kelompok where id_kelompok='$id_kelompok'");
		return $hsl;
	}
	

}