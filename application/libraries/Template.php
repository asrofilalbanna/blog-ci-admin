<?php 

class Template {

	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
	}

	function views( $template = NULL, $data = NULL) {
		if ($template != NULL ) 
		{

			$data['_header']    = $this->_ci->load->view('_layout/_header', $data, TRUE);
			$data['_sidebar']  	= $this->_ci->load->view('_layout/_sidebar', $data, TRUE);
			$data['_content']	= $this->_ci->load->view($template, $data, TRUE);
			$data['_footer']	= $this->_ci->load->view('_layout/_footer', $data, TRUE);

			echo $data['_template']	= $this->_ci->load->view('_layout/_template', $data, TRUE);
		}
	}
}

?>