<?php
class Email_model extends CI_Model {

	public function sendVerificatinEmail($email, $verificationText) {
		
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com.',
			'smtp_port' => 465,
			'smtp_user' => '', // change it to yours
			'smtp_pass' => '', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
			
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('', "Team Souvenir");
		$this->email->to($email);		
		$this->email->subject("Yaadein Email Verification");
		$this->email->message("<a href=\"".base_url()."index.php/registration/verifyEmailAddress/".$verificationText."\">Click here</a> to confirm registration.<br/><br/>Thanks <br/><br/>The Souvenir Team");
		$this->email->send();
	}
    
    public function sendFeedbackEmail($email) {

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com.',
            'smtp_port' => 465,
            'smtp_user' => '', // change it to yours
            'smtp_pass' => '', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('', "Team Souvenir");
        $this->email->to($email);
        $this->email->subject("Yaadein Feedback Verification");
        $this->email->message("Your feedback has been successfully recorded");

        $this->email->send();

    }
}	
