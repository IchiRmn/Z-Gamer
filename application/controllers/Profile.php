<?php 
class Profile extends CI_Controller 
{
	
	function __construct() 
	{ 
		parent::__construct();
		cek_login(); 
		$this->load->model(['ModelUser']);
		 
	} 
	public function index()
	{ 
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		
		$data['tittle']='Profie';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['email'] = $user['email'];
		$data['date'] = $user['date_created'];
		$data['top'] = '|Z| Profile';

		$this->load->view('templates-user/header',$data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('Profile/profile');
		$this->load->view('templates-user/footer');
	}
	public function changeProfile()
	{
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();	
		
		$data['tittle']='Profie';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['email'] = $user['email'];
		$data['date'] = $user['date_created'];
		$data['top'] = '|Z| Regist';
		

		$this->form_validation->set_rules('name', 'Name', 'required|trim', [ 'required' => 'Enter Your Name']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('templates-user/header',$data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('Profile/changeProfile',$data);
			$this->load->view('templates-user/footer',$data);
		} 
		else 
		{ 
			$name = $this->input->post('name', true); 
			$email = $this->input->post('email', true); 
			
			//jika ada gambar yang akan diupload 
			$upload_image = $_FILES['image']['name']; 
			
			if ($upload_image) 
				{ 
					$config['upload_path'] = './assets/images/Profile/'; 
					$config['allowed_types'] = 'gif|jpg|png'; 
					$config['max_size'] = '5000'; 
					$config['file_name'] = 'pro' . time(); 

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image')) 
						{ 
							$old_pict = $data['user']['image']; 

							if ($old_pict != 'default.jpg') 
								{ 
									unlink(FCPATH . 'assets/images/Profile/' . $old_pict); 
								} 

							$new_pict = $this->upload->data('file_name'); 
							$this->db->set('image', $new_pict);
						} 
					else 
						{ } 
				} 

			$this->db->set('name', $name); 
			$this->db->where('email', $email); 
			$this->db->update('user'); 
			$this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert" role="alert">Profile Updated! </div>'); 

			redirect('Profile'); 
		} 
	}

	public function dataUser()
	{
		$data['title'] = 'Data User';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['user'] = $this->db->get('user')->result();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('profile/data_user.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function inputUser()
	{
		$data['title'] = 'Input User';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]|valid_email',['is_unique' => 'Email Is Already To Use!']);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]',[
            'matches'=>'Not Matches!',
            'min_length'=>'Too Short!',         
            'required'=>'Enter your Password']);

        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]',[
        'required'=>'Enter your Password']);

        if ($this->form_validation->run()==false){
        $this->load->view('admin/header.php',$data);
		$this->load->view('profile/input_user.php',$data);
		$this->load->view('admin/footer.php');

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
            redirect('Profile/dataUser');
        }	
	}
	public function editProfile()
	{
		$id=$this->uri->segment(3);

		$data['title'] = 'Edit User';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim', [ 'required' => 'Enter Your Name']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('profile/editProfile.php',$data);
			$this->load->view('admin/footer.php');
		} 
		else 
		{ 
			$name = $this->input->post('name', true); 
			$email = $this->input->post('email', true); 
			
			//jika ada gambar yang akan diupload 
			$upload_image = $_FILES['image']['name']; 
			
			if ($upload_image) 
				{ 
					$config['upload_path'] = './assets/images/Profile/'; 
					$config['allowed_types'] = 'gif|jpg|png'; 
					$config['max_size'] = '5000'; 
					$config['file_name'] = 'pro' . time(); 

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image')) 
						{ 
							$old_pict = $data['user']['image']; 

							if ($old_pict != 'default.jpg') 
								{ 
									unlink(FCPATH . 'assets/images/Profile/' . $old_pict); 
								} 

							$new_pict = $this->upload->data('file_name'); 
							$this->db->set('image', $new_pict);
						} 
					else 
						{ } 
				} 

			$this->db->set('name', $name); 
			$this->db->where('email', $email); 
			$this->db->update('user'); 
			$this->session->set_flashdata('alert', '<div class="alert alert-message text-white bg-danger text-center" role="alert" role="alert">Profile Updated! </div>'); 

			redirect('Profile/dataUser');
		} 	
	}
	public function deleteUser()
	{
		$id=$this->uri->segment(3);
		$this->ModelMerchan->deleteData(['id' => $id], 'user');
		redirect('Profile/dataUser');
	}
}
	// public function changePassword()
	// {
	// 		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

	// 		foreach ($user as $a){	
	// 		$data = [
	// 			'tittle'=>'Profile',
	// 			'top'=>'|Z| Profile',
	// 			'user'=> $user['name'],
	// 			'img'=> $user['image'],
	// 			'email'=> $user['email'],
	// 			'pass' => $user['pass'],
	// 			'date'=> $user['date_created'] ];
	// 		} 


	// 	$this->form_validation->set_rules('password_sekarang', 'Password Saat ini', 'required|trim', [
 //            'required' => 'Password saat ini harus diisi'
 //        ]);

 //        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim|min_length[4]|matches[password_baru2]', [
 //            'required' => 'Password Baru harus diisi',
 //            'min_length' => 'Password tidak boleh kurang dari 4 digit',
 //            'matches' => 'Password Baru tidak sama dengan ulangi password'
 //        ]);

 //        $this->form_validation->set_rules('password_baru2', 'Konfirmasi Password Baru', 'required|trim|min_length[4]|matches[password_baru1]', [
 //            'required' => 'Ulangi Password harus diisi',
 //            'min_length' => 'Password tidak boleh kurang dari 4 digit',
 //            'matches' => 'Ulangi Password tidak sama dengan password baru'
 //        ]);

 //        if ($this->form_validation->run() == false) {
 //            $this->load->view('templates-user/header',$data);
	// 		$this->load->view('templates-user/topbar',$data);
	// 		$this->load->view('Profile/changePassword',$data);
	// 		$this->load->view('templates-user/footer');
 //         } else {
 //            $pwd_skrg = $this->input->post('password_sekarang');
 //            $pwd_baru = $this->input->post('password_baru1');
 //            if (!password_verify($pwd_skrg, $data['user']['password'])) {
 //                $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-message" role="alert">Password Saat ini Salah!!! </div>');
 //                redirect('Profile/changePassword');
 //            } else {
 //                if ($pwd_skrg == $pwd_baru) {
 //                    $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-message" role="alert">Password Baru tidak boleh sama dengan password saat ini!!! </div>');
 //                    redirect('Profile/changePassword');
 //                } else {
 //                    //password ok
 //                    $password_hash = password_hash($pwd_baru, PASSWORD_DEFAULT);

 //                    $this->db->set('password', $password_hash);
 //                    $this->db->where('email', $this->session->userdata('email'));
 //                    $this->db->update('user');

 //                    $this->session->set_flashdata('alert', '<div class="alert alert-success alert-message" role="alert">Password Berhasil diubah</div>');
 //                    redirect('Profile');
 //                }
 //            }
 //        }
 //    }
