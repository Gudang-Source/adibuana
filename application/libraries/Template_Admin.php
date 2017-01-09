<?php
	class Template_Admin{
		protected $_ci;
		function __construct(){
			$this->_ci =&get_instance();
		}

		function display($template, $data=null){
			$data['_content'] = $this->_ci->load->view($template, $data, true);
			$data['_header'] = $this->_ci->load->view('/admin/header', $data, true);
			$data['_sidebar'] = $this->_ci->load->view('/admin/sidebar', $data, true);
			$data['_footer'] = $this->_ci->load->view('/admin/footer', $data, true);

			$this->_ci->load->view('/admin/template.php', $data);

		}
	}
?>