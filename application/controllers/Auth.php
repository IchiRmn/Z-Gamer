<?php 
class Auth extends CI_Controller 
{
	
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelUser']);
		 
	} 
	public function index()
	{
		if ($this->session->userdata('email')){
             $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">You have logged in</div>');
            redirect('Home');
        }	


        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Enter Your Email',
            'valid_email' => 'Wrong Email'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Enter Your Password'
        ]);
        if ($this->form_validation->run() == false) {
            $data['tittle']='Login';;
            $data['user'] = '';
            
            $this->load->view('authentification/header', $data);
			$this->load->view('authentification/login');
			$this->load->view('authentification/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    if ($user['role_id'] == 1){
                        $this->session->set_userdata($data);
                        redirect('Admin');
                    } else {
                        $this->session->set_userdata($data);
                        redirect('Home');
                    }
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert" role="alert">Wrong Paswword!</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert" role="alert">Not Activated!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">Not Registered</div>');
            redirect('Auth');
        }
    }
    public function Regist()
    {
        if ($this->session->userdata('email')){
             $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">You have logged in</div>');
            redirect('Home');
        }
            $data['tittle']='Registration';

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]|valid_email',['is_unique' => 'Email Is Already To Use!']);
            $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]',[
                'matches'=>'Not Matches!',
                'min_length'=>'Too Short!',         
                'required'=>'Enter your Password']);

            $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]',[
            'required'=>'Enter your Password']);

            if ($this->form_validation->run()==false){
            $this->load->view('authentification/header',$data);
            $this->load->view('authentification/regist');
            $this->load->view('authentification/footer');

        }else{

            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => date('Y-m-d'),
            ];

            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">The Account Successfully Created</div>');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert">You have logged out!</div>');
        redirect('Auth');
    }
}