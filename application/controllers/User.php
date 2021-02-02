<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public $newUser;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model("user_model");
		$this->newUser = new User_model;
	}

	//Display all data from DB
	public function index()
	{
		$this->load->model("user_model");
		$data['results'] = $this->user_model->getAll();
		$this->load->view("display",$data);
	}

	//Show a form to create new data
	public function create()
	{
		$this->load->view("create");
	}

	//Store the data into the DB
	public function store(){
		//Some validations
		$this->form_validation->set_rules('telephone','Telephone','required');
		$this->form_validation->set_rules('games','Games','required');
		$this->form_validation->set_rules('clothes','Clothes','required');

		if($this->form_validation->run() === false){
			$message = array(
				"message1" => 'Telephone is required!',
				"message2" => 'Games are required',
				"message3" => 'Clothes are required'
			);
			$this->load->view('create',$message);
		}
		else {
			$this->newUser->store();
			$this->load->view("user/succes");
		}
	}

	//Show a form to edit new data
	public function edit($id)
	{
		$items = $this->user_model->selectOne($id);
		$this->load->view("edit", $items);
	}

	//Update the data into the DB
	public function update($id){
			$this->user_model->update($id);
			$this->load->view("user/succes");
	}

	//Delete some data from DB
	public function delete($id){
		$this->user_model->delete($id);
		$this->load->view("user/delete");
	}
}
