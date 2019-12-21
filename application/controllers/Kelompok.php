<?php
class Kelompok extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('m_kelompok');
        $this->load->model('m_program');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index($slug = ''){
        $x['data']=$this->m_program->get_all_program();
        if($slug == ''){
            $x['data']=$this->m_program->get_all_program();
        }else{
            $x['data']=$this->m_program->get_program_by($slug);
        }
		$this->template->set('title','Program Belajar');
		$this->template->load('template','contents','depan/program',$x);
	}

}
