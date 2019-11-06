<?php
class visi_misi extends CI_Controller{
	function __construct(){
		parent::__construct();

	}
	function index(){
		$this->template->set('title','Visi & Misi');
		$this->template->load('template','contents','depan/visi-misi');
	}
}