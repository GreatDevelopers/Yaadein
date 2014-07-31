<?php
/**
* 
*/
class Form extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		if($this->session->all_userdata()) 
   		$email=$this->session->userdata('username');
   		$data['name'] =$email['id'];
		$this->load->view('Form/form.php');
		$this->load->view('Home/header.php',$data);
	}


	public function do_upload() {
		
		$this->load->library('form_validation');
		$this->load->library('image_lib');
		$this->form_validation->set_rules('Firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('Middlename', 'Middlename');
		$this->form_validation->set_rules('Lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('Fatherprefix', 'Fatherprefix', 'required');
		$this->form_validation->set_rules('Fatherfirstname', 'Fatherfirstname', 'required');
		$this->form_validation->set_rules('Fathermiddlename', 'Fathermiddlename');
		$this->form_validation->set_rules('Fatherlastname', 'Fatherlastname', 'required');
		$this->form_validation->set_rules('Motherprefix', 'Motherprefix', 'required');
		$this->form_validation->set_rules('Motherfirstname', 'Motherfirstname', 'required');
		$this->form_validation->set_rules('Mothermiddlename', 'Mothermiddlename');
		$this->form_validation->set_rules('Motherlastname', 'Motherlastname', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('DOB', 'DOB', 'required');
		$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('Postalcode', 'Postalcode', 'required');
		$this->form_validation->set_rules('userfile', 'Image', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Branch', 'Branch', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Classronum', 'ClassRollNumber', 'required');
		$this->form_validation->set_rules('Unironum', 'UniversityRollNumber', 'required');
		$this->form_validation->set_rules('Comment', 'Comment', 'required');
		
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|JPG|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if ( ! $this->upload->do_upload() && $this->form_validation->run() == FALSE)
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('Form/form', $error);
			$this->load->view('Home/header.php');
		}
		else
		{
		
			$data = $this->upload->data();
			$this->load->model('form_model');
			$this->do_thumb($data['full_path']);
			$this->load->view('Form/success', $data);
			if($this->session->all_userdata()) 
   			$email=$this->session->userdata('username');
   			$data['name'] =$email['id'];			
			$this->load->view('Home/header.php', $data);
			$this->form_model->form_fill($data['file_name']);
		}
	}

	public function do_thumb($file) {
		$image_data = $this->upload->data();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $image_data['full_path'];
		$config['create_thumb'] = TRUE;	
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 275;
		$config['height'] = 250;

		$this->load->library('image_lib', $config);

		if ( ! $this->image_lib->resize())
		{
		    echo $this->image_lib->display_errors();
		}
	}
}
?>