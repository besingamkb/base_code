<?php 

class Main extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users');
		dprint($this->session->all_userdata());
	}
	
	public function index() {

		$this->template("pages/main_page");
	}

	public function login() {
		if ( is_logged() ) {
			redirect(base_url());
		}
		$data['header'] = array(
			'title' => "Login Page"
		);
		$this->template("pages/login", $data);
	}

	public function users($offset = 0) {
		if (!is_logged()) redirect(base_url());
		$limit = 2;
		$data['header']['title'] = "Users Page";

		$result = $this->users->users_record($limit, $this->uri->segment(3));

		$this->load->library('pagination');

		$config = array();
		$config['base_url'] = site_url('main/users');
		$config['total_rows'] = $result['num_rows'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['content']['pagination'] = $this->pagination->create_links();

		$data['content']['users'] = $result['result'];
		$data['content']['num_rows'] = $result['num_rows'];
		$this->template("pages/users", $data);
	}

	public function create_account() {
		$data['header']['title'] = "Create an developer's account";

		$this->load->library('pagination');
		$this->template("pages/create_user", $data);
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
}