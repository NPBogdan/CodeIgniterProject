<?php

	class User_model extends CI_Model {
		public function getAll(){
			$data = $this->db->query("SELECT * FROM objects");
			return $data->result();
		}

		public function store(){
			$this->load->helper('url');
			$data = array(
				'telephone' => $this->input->post('telephone'),
				'games' => $this->input->post('games'),
				'clothes' => $this->input->post('clothes')
			);
			return $this->db->insert('objects',$data);
		}

		public function selectOne($id){
			$item = $this->db->query("SELECT * FROM objects WHERE id = ?", array($id));
			return $item->row_array();
		}

		public function update($id){
			$this->load->helper('url');
			$data = array(
				'telephone' => $this->input->post('telephone'),
				'games' => $this->input->post('games'),
				'clothes' => $this->input->post('clothes')
			);

			$this->db->update('objects', $data, 'id = ' . $id);
		}

		public function delete($data){
			$delete = array("id" => $data);
			$this->db->delete("objects",$delete);

		}
	}
