<?php 


class User extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('users');
	}

	public function access() {

	}

	public function validate_login() {
		//dprint($this->input->post());
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		contextJson();

		if ($this->form_validation->run()) {
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');

			$check_user = $this->users->login($data);
			if ( $check_user['num_rows'] != 1) {
				//error
				echo json_encode(array('success' => false, 'msg' => 'Login failed! Wrong username or password'));
			} else {
				//$this->session->sess_destroy();
				$this->session->set_userdata(array('is_logged' => true));
				$this->session->set_userdata(array('usermeta' => serialize(get_object_vars($check_user['result'][0]))));
				echo json_encode(array('success' => true, 'msg' => 'Login success!'));
			}

			// 	echo json_encode(array('success' => true, 'msg' => 'Login success!'));
		} else {
			echo json_encode(array('success' => false, 'msg' => validation_errors('', '')));
		}
	}

	public function validate_newuser() {
		contextJson();
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[32]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[32]');

		if ($this->form_validation->run()) {
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['ulevel'] = 1;
			$data['is_active'] = 1;

			$this->users->saveUser($data);
			echo json_encode(array('success' => true, 'msg' => "Succesfully Added."));
		} else {
			echo json_encode(array('success' => false, 'msg' => validation_errors('', '')));
		}

	}


}