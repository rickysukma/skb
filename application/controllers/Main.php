<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('ampas');
  }

  public function index(){
    $data['berita'] = NULL;
    $this->ampas->utama('depan/home',$data);
  }

  public function berita(){
    $this->ampas->utama('depan/berita');
  }

  public function tentang(){
    $this->ampas->utama('depan/tentang');
  }
}