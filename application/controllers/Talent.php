<?php 
class Talent extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct();
		$this->load->model(['ModelTour', 'ModelUser']);
		 
	} 
	public function index()
	{ 
		$data = [
			'tittle'=>'Talent',
			'tour' =>$this->ModelTour->getTour()->result(),
		];	

			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart();
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 

			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
			$data['top'] = '|Z| Talent';

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('talent/talent.php');
			$this->load->view('templates-user/footer'); 
	}
	public function Solo()
	{
		cek_login1();
		$data = [
			'tittle'=>'Talent',
			'tour' =>$this->ModelTour->joinCategories(['tournament.id_categories'=>1])->result(),
		];	
			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart();
		
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 

			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
			$data['top'] = '|Z| Talent';

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('talent/draftSL',$data);
			$this->load->view('templates-user/footer'); 
	}
	public function SoloRegist()
	{
		cek_login1();
		$id = $this->uri->segment(3); 
		$tour = $this->ModelTour->joinCategories(['tournament.id_tour' => $id])->result();
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$id_user = $this->session->userdata('id_user');
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart(); 
		$data['tittle'] = 'Talent';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Regist';

		foreach ($tour as $t) {
			$data['n']=$t->name_tour;
			$data['g']=$t->game_tour;
			$data['image']=$t->image_tour;
			$data['d']=$t->date_tour;
			$data['organizer']=$t->organizer;
			$data['ctg']=$t->category;
			$data['dec']=$t->description_tour;
			$data['id']=$id;
		}

		$this->form_validation->set_rules('name','name','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('dob','dob','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('country','country','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('city','city','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('phone','phone','required',[
            'required'=>'This field cannot be empty']);
		
			
		if($this->form_validation->run() == false){

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('talent/SLregist',$data);
		$this->load->view('templates-user/footer');
		}

		else{

			
			$data = [
				'id_solo' => $this->ModelTour->autoIncSL('solo','id_solo'),
				'id_user' => $user['id'], 
				'email' => $this->session->userdata('email'),
				'id_tour'=> $id, 
                'fullname' => $this->input->post('name', true),
                'dob' => $this->input->post('dob', true),
                'country_sl' => $this->input->post('country', true),
                'city_sl' => $this->input->post('city', true),
                'phone_sl' => $this->input->post('phone', true),
            ];
            

            $fill = [
            	'id_regist' => $this->ModelTour->code('regist','id_regist'),
            	'id_user' => $user['id'],
            	'id_solo' => $this->ModelTour->autoIncSL('solo','id_solo'),
            	'date_regist' => date('Y-m-d H:m:s'),
            ];
	        $this->ModelTour->saveSolo($data);
	        $this->ModelTour->insertData('regist', $fill);
	        redirect('Talent/OutSl');
		}	

	}

	public function OutSL()
	{
		cek_login1();
		$id = $this->db->insert_id('regist'); 
		$tour = $this->ModelTour->joinSL(['regist.id_regist' => $id])->result();

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$data['tittle'] = 'Talent';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Regist';
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();

		foreach ($tour as $t) {			
			$data['image'] = $t->image;
			$data['na']=$t->name;
			$data['mail']=$t->email;
			$data['d'] = $t->id_regist;
			$data['fll']=$t->fullname;
			$data['dob']=$t->dob;
			$data['coun']=$t->country_sl;
			$data['cit']=$t->city_sl;
			$data['ph']=$t->phone_sl;
			$data['imgt']=$t->image_tour;
			$data['nt']=$t->name_tour;
			$data['ge']=$t->game_tour;
			$data['dtt']=$t->date_tour;
			$data['ctg'] = $t->category;
			$data['org']= $t->organizer;
			$data['us']=$t->id;
		}

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('talent/OutSL',$data);
		$this->load->view('templates-user/footer'); 
	}
	public function Squad()
	{
		cek_login1();
		$data = [
			'tittle'=>'Talent',
			'tour' =>$this->ModelTour->joinCategories(['tournament.id_categories'=>2])->result(),
		];	

		
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart(); 

			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
			$data['top'] = '|Z| Talent';

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('talent/draftSQ',$data);
			$this->load->view('templates-user/footer'); 
	}
	public function SquadRegist()
	{
		cek_login1();
		$id = $this->uri->segment(3); 
		$tour = $this->ModelTour->joinCategories(['tournament.id_tour' => $id])->result();
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$id_user = $this->session->userdata('id_user'); 
		$data['tittle'] = 'Talent';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Regist';
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();

		foreach ($tour as $t) {
			$data['n']=$t->name_tour;
			$data['g']=$t->game_tour;
			$data['image']=$t->image_tour;
			$data['d']=$t->date_tour;
			$data['organizer']=$t->organizer;
			$data['ctg']=$t->category;
			$data['dec']=$t->description_tour;
			$data['id']=$id;
		}

		$this->form_validation->set_rules('tname','tname','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('office','office','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('emailoff','emailoff','required|valid_email',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('phone','phone','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('country','country','required',[
            'required'=>'This field cannot be empty']);
		$this->form_validation->set_rules('city','city','required',[
            'required'=>'This field cannot be empty']);
		
        $config['upload_path'] = './assets/images/Logo/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);
			
		if($this->form_validation->run() == false){

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('talent/SQregist',$data);
		$this->load->view('templates-user/footer');
		}

		else{

			if ($this->upload->do_upload('logo')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

			$data = [
				'id_squad' => $this->ModelTour->autoIncSQ('squad','id_squad'),
				'id_user' => $user['id'], 
				'email' => $this->session->userdata('email'),
				'id_tour'=> $id, 
                'team' => $this->input->post('tname', true),
                'name_off' => $this->input->post('office', true),
                'phone_off' => $this->input->post('phone', true),
                'email_off' => $this->input->post('emailoff', true),
                'country_sq' => $this->input->post('country', true),
                'city_sq' => $this->input->post('city', true),
                'logo' => $gambar,
            ];
            

            $fill = [
            	'id_regist' => $this->ModelTour->code('regist','id_regist'),
            	'id_user' => $user['id'],
            	'id_squad' => $this->ModelTour->autoIncSQ('squad','id_squad'),
            	'date_regist' => date('Y-m-d H:m:s'),
            ];
	        $this->ModelTour->saveSquad($data);
	        $this->ModelTour->insertData('regist', $fill);
	        redirect('Talent/OutSQ');
		}	

	}

	public function OutSQ()
	{
		cek_login1();
		$id = $this->db->insert_id('regist'); 
		$tour = $this->ModelTour->joinSQ(['regist.id_regist' => $id])->result();

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$data['tittle'] = 'Talent';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Regist';
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		

		foreach ($tour as $t) {
			
			$data['logo'] = $t->logo;
			$data['team']=$t->team;
			$data['office']=$t->name_off;
			$data['emoff'] = $t->email_off;
			$data['phone']=$t->phone_off;
			$data['coun']=$t->country_sq;
			$data['cit']=$t->city_sq;
			$data['regist']=$t->id_regist;
			$data['imgt']=$t->image_tour;
			$data['nt']=$t->name_tour;
			$data['ge']=$t->game_tour;
			$data['dtt']=$t->date_tour;
			$data['ctg'] = $t->category;
			$data['org']= $t->organizer;
			$data['us']=$t->id;
		}
		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('talent/OutSQ',$data);
		$this->load->view('templates-user/footer'); 
	}
}