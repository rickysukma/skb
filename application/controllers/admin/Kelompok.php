<?php
class Kelompok extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kelompok');
	}


	function index(){
		$x['data']=$this->m_kelompok->get_all_kelompok();
		$this->template->set('title','Kelompok Progam Belajar');
		$this->template->admin('admin/kelompok',$x);
	}
	
	function simpan_kelompok(){
        $nama=strip_tags($this->input->post('nama'));
        $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
        $trim     = trim($string);
        $slug     = strtolower(str_replace(" ", "-", $trim));
        echo $this->session->set_flashdata('msg','success');
        $simpan = $this->m_kelompok->simpan_kelompok($nama,$slug);
        redirect('admin/kelompok');
	}
	
	function update_kelompok(){
		$kode=strip_tags($this->input->post('kode'));
        $nama=strip_tags($this->input->post('nama'));
        $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $nama);
        $trim     = trim($string);
        $slug     = strtolower(str_replace(" ", "-", $trim));
		$this->m_kelompok->update_kelompok($nama,$slug,$kode);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kelompok');
	}

	function hapus_kelompok(){
		$kode=$this->input->post('kode');
		$this->m_kelompok->hapus_kelompok($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kelompok');
	}

}