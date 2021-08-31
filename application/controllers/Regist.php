<?php 
class Regist extends CI_Controller 
{
	
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelUser']);
		 
	} 
	public function index()
	{
			$data['tittle']='Registration';

			$this->form_validation->set_rules('name', 'Name', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
			$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]',[
				'matches'=>'Not Matches!',
				'min_length'=>'Too Short!',			
				'required'=>'Enter your Password']);

			$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]',[
			'required'=>'Enter your Password']);

			if ($this->form_validation->run()==false){
            $this->load->view('authentification/header1',$data);
			$this->load->view('authentification/regist');
			$this->load->view('authentification/footer1');

		}else{

			$email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">Account Successfully Created</div>');
            redirect('Login');
		}
	}
}