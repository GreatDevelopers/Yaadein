<?php
/**
* 
*/
class Form extends CI_Controller {

    function __construct() {
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
        

        $config['upload_path'] = './uploads/activity_images/original';
        $config['allowed_types'] = 'gif|jpg|JPG|jpeg|png';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
         
        if ( ! $this->upload->do_upload() && $this->form_validation->run() == FALSE) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Form/form', $error);
            $this->load->view('Home/header.php');
        } else {
            $data = $this->upload->data();
            $this->crop($data['full_path'],$data['file_name']);
            $this->resize($data['file_name']);
            $this->load->model('form_model');
            $this->load->view('Form/success', $data);
            if($this->session->all_userdata()) 
            $email=$this->session->userdata('username');
            $data['name'] =$email['id'];            
            $this->load->view('Home/header.php', $data);
            $this->form_model->form_fill($data['file_name']);
        }
    }

    public function crop($path,$file) {
        $dimensions = @getimagesize($path); //get image dimensions in a array variable
        
        if($dimensions[0]<=$dimensions[1])   //compare width(dimensions[0] and height(dimensions[1]) 
            $square = $dimensions[0];    //assign square to to the min of two(height and width)
        else
            $square  = $dimensions[1];
            $config['image_library'] = 'gd2';
            $config['source_image'] = $path;
            $config['maintain_ratio'] = FALSE;
            $config['height'] = $square;
            $config['width'] = $square;
            $config['new_image']='./uploads/activity_images/thumbs/'.$file; //path of newly cropped image

            $this->load->library('image_lib', $config); //load library image_lib
            $this->image_lib->crop();  //crop function of image_lib called 
            $this->image_lib->clear(); //reset image_lib configurations
    }
    
    public function resize($file) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = './uploads/activity_images/thumbs/'.$file;
        $config['maintain_ratio'] = FALSE;
        $config['height'] = 600;  
        $config['width'] = 600;
        $config['new_image']='./uploads/activity_images/resized/'.$file;
        $this->image_lib->initialize($config);  //initialize image_lib with new configurations
        $this->image_lib->resize();   // call resize function of image_lib
        $this->image_lib->clear();  
    }
    
}
?>
