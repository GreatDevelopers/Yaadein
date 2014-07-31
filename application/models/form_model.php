<?php
/**
* 
*/
class Form_model extends CI_Model {
	public function form_fill($file) {
		$this->load->database();
		$id = $this->input->post('id');
		$firstname = $this->input->post('Firstname');
		$middlename = $this->input->post('Middlename');
		$lastname = $this->input->post('Lastname');
		$fatherprefix = $this->input->post('Fatherprefix');
		$fatherfirstname = $this->input->post('Fatherfirstname');
		$fathermiddlename = $this->input->post('Fathermiddlename');
		$fatherlastname = $this->input->post('Fatherlastname');
		$motherprefix = $this->input->post('Motherprefix');
		$motherfirstname = $this->input->post('Motherfirstname');
		$mothermiddlename = $this->input->post('Mothermiddlename');
		$motherlastname = $this->input->post('Motherlastname');
		$gender = $this->input->post('Gender');
		$dob = $this->input->post('DOB');
		$mobile = $this->input->post('Mobile');
		$postalcode = $this->input->post('Postalcode');
		$address = $this->input->post('Address');
		$photo = $this->input->post('userfile');
		$branch = $this->input->post('Branch');
		$email = $this->input->post('Email'); 
		$classrollno = $this->input->post('Classronum');
		$universityrollno = $this->input->post('Unironum');
		$comment = $this->input->post('Comment');    		

		$data = array(
			'firstname' => $this->input->post('Firstname'),
			'middlename' => $this->input->post('Middlename'),
			'lastname' => $this->input->post('Lastname'),
			'fatherprefix' => $this->input->post('Fatherprefix'),
			'fatherfirstname' => $this->input->post('Fatherfirstname'),
			'fathermiddlename' => $this->input->post('Fathermiddlename'),
			'fatherlastname' => $this->input->post('Fatherlastname'),
			'motherprefix' => $this->input->post('Motherprefix'),
			'motherfirstname' => $this->input->post('Motherfirstname'),
			'mothermiddlename' => $this->input->post('Mothermiddlename'),
			'motherlastname' => $this->input->post('Motherlastname'),
			'gender' => $this->input->post('Gender'),
			'dob' => $this->input->post('DOB'),
			'mobile' => $this->input->post('Mobile'),
			'postalcode' => $this->input->post('Postalcode'),
			'address' => $this->input->post('Address'),
			'photo' => $file,
			'branch' => $this->input->post('Branch'),
			'email' => $this->input->post('Email'),
			'classrollno' => $this->input->post('Classronum'),
			'universityrollno' => $this->input->post('Unironum'),
			'comment' => $this->input->post('Comment')
			);
		$this->db->insert('student', $data);
	}
}
?>