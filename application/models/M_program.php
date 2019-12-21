<?php
class M_program extends CI_Model{

	function get_all_program(){
		$hsl=$this->db->query("SELECT tbl_program.*, tbl_kelompok.nama_kelompok FROM `tbl_program` JOIN tbl_kelompok ON tbl_kelompok.id_kelompok = tbl_program.id_kelompok ");
		return $hsl;
	}
	function simpan_program($nama,$keterangan,$id_kelompok,$biaya){
		$hsl=$this->db->query("insert into tbl_program(nama_program,deskripsi,id_kelompok,biaya) VALUES ('$nama','$keterangan',$id_kelompok,$biaya)");
		return $hsl;
	}
	function get_program_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_program where id_program='$kode'");
		return $hsl;
	}
	function update_program($id,$nama,$keterangan,$id_kelompok,$biaya){
		$hsl=$this->db->query("update tbl_program set nama_program = '$nama', deskripsi = '$keterangan', biaya='$biaya', id_kelompok = '$id_kelompok' where id_program=$id");
		return $hsl;
	}

	function hapus_program($kode){
		$hsl=$this->db->query("delete from tbl_program where id_program='$kode'");
		return $hsl;
	}

	//Front-End
	function get_program_by($slug){
		$hsl=$this->db->query("SELECT * FROM tbl_program JOIN tbl_kelompok ON tbl_kelompok.id_kelompok = tbl_program.id_kelompok WHERE tbl_kelompok.slug = '$slug'");
		return $hsl;
	}

	function cari_berita($keyword){
		$hsl=$this->db->query("SELECT tbl_program.*,DATE_FORMAT(program_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_program WHERE program_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_id_program($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_id_program='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
