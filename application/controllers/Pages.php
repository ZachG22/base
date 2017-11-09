<?php 
	class Pages extends CI_Controller {

		public function view($page = 'home') 
		{
			if(!file_exists(APPPATH.'views/pages/'. $page . '.php')) {
				show_404();
			}

			$headerData['title'] = ucfirst($page) . ' | Site';
			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $headerData);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function test()
		{
			echo 'Test!';
		}

		public function index()
		{
			echo 'Index';
		}
	}