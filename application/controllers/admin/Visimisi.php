<?php
class Visimisi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_identitas');
	}


	function index(){
		$x['data']=$this->m_identitas->data();
		// $this->load->view('admin/v_agenda',$x);
		$this->template->set('title','Visi, Misi & Tujuan');
		$this->template->admin('admin/visi-misi-tujuan',$x);
	}

	function simpan(){
		$nama_agenda=strip_tags($this->input->post('xnama_agenda'));
		$deskripsi=$this->input->post('xdeskripsi');
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->simpan_agenda($nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/agenda');
	}

	function update_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$nama_agenda=strip_tags($this->input->post('xnama_agenda'));
		$deskripsi=$this->input->post('xdeskripsi');
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->update_agenda($kode,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/agenda');
	}
	function hapus_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_agenda->hapus_agenda($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/agenda');
	}

}