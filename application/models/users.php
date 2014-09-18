<?php 


class Users extends CI_Model {

	public function users_record($limit, $offset) {
		$this->db->select('*')
			->from('users')
			->order_by('id', 'desc')
			->limit($limit, $offset);

		$ret['result'] = $this->db->get()->result();

		$this->db->select('COUNT(*) as count', true)
			->from('users');
		$count_query = $this->db->get()->result();
		$ret['num_rows'] = $count_query[0]->count;

		return $ret;
	}

	public function login($data) {
		$this->db->select("username, ulevel, is_active")
			->from("users")
			->where("username", $data['username'])
			->where("password", md5($data['password']));

		$query = $this->db->get();
		$ret['result'] = $query->result();
		$ret['num_rows'] = $query->num_rows();
		return $ret;
	}
	
	public function saveUser($data) {
		$this->db->insert('users', $data);
	}
}