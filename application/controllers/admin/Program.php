<?php
class Program extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kelompok');
		$this->load->model('m_program');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_program->get_all_program();
		$this->template->set('title','Progam Belajar');
		// $this->load->view('admin/v_program',$x);
		$this->template->admin('admin/program',$x);
	}
	function add_program(){
		$x['kat']=$this->m_kelompok->get_all_kelompok();
		$this->template->set('title','Tambah Program Belajar');
		$this->template->edit('admin/add_program',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_program->get_program_by_kode($kode);
		$x['kat']=$this->m_kelompok->get_all_kelompok();
		// $this->load->view('admin/v_edit_program',$x);
		$this->template->set('title','Sunting Kegiatan');
		$this->template->edit('admin/edit_program',$x);
	}
	function simpan(){
        // print_r($_POST);die();
        $nama=strip_tags($this->input->post('nama_program'));
        $keterangan=$this->input->post('keterangan');
        $id_kelompok=strip_tags($this->input->post('kelompok'));
        $biaya = strip_tags($this->input->post('biaya'));
        if($biaya == NULL || $biaya == 0){
            $biaya = 0;
        }
        $this->m_program->simpan_program($nama,$keterangan,$id_kelompok,$biaya);
        echo $this->session->set_flashdata('msg','success');
        redirect('admin/program');

	}

	function update_program(){
		// print_r($_POST);die();
		$id_program = $this->input->post('id');
        $nama=strip_tags($this->input->post('nama_program'));
        $keterangan=$this->input->post('keterangan');
        $id_kelompok=strip_tags($this->input->post('kelompok'));
        $biaya = strip_tags($this->input->post('biaya'));
        if($biaya == NULL || $biaya == 0){
            $biaya = 0;
        }
        if($this->m_program->update_program($id_program,$nama,$keterangan,$id_kelompok,$biaya)){
			echo $this->session->set_flashdata('msg','success');
		}else{
			echo $this->session->set_flashdata('msg','warning');
		}
        redirect('admin/program');

	}

	function hapus_program(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_program->hapus_program($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/program');
	}

}
