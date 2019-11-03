<?php
class Template extends CI_Controller{
    
    function display($template, $data = null) {		
		$data['content'] 	= $this->load->view($template, $data,true);
		$data['_header'] 	= $this->load->view('depan/header', $data,true);
		// $data['_sidebar'] 	= $this->load->view('depan/sidebar', $data,true);
		$data['_footer'] 	= $this->load->view('depan/footer', $data,true);
		
		$this->load->view('/template', $data);
    }


}
