<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// class Template {	
// 	protected $_ci;
// 	function __construct(){
// 		$this->_ci = &get_instance();
// 	}
	
// 	function display($template, $data = null) {		
// 		$data['content'] 	= $this->_ci->load->view($template,$data,true);
// 		// $data['_header'] 	= $this->_ci->load->view('depan/header',$data,true);
// 		// $data['_footer'] 	= $this->_ci->load->view('depan/footer',$data,true);
		
// 		$this->_ci->load->view('template.php', $data);
// 	}
// }
	
class Template {
		var $template_data = array();

		public function __construct()
		{
			$this->CI =& get_instance();
			$this->CI->load->model('m_identitas');
		}

		function set($content_area, $value)
		{
			$this->template_data[$content_area] = $value;
		}
	
		function load($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE)
		{               
			// $this->CI =& get_instance();
			$view_data['identitas'] = $this->CI->m_identitas->data();
			$this->set($name , $this->CI->load->view($view, $view_data, TRUE));
			$this->CI->load->view('depan/'.$template, $this->template_data);
		}
}