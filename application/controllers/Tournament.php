<?php 
class Tournament extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelTour', 'ModelUser']);
		 
	} 
	public function index()
	{ 
		$data = [
			'tittle'=>'Tournament',
			'tour' =>$this->ModelTour->getTour()->result(),
		];	
			
			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart();
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 

			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
			$data['top'] = '|Z| Tournament';

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('tournament/tour', $data);
			$this->load->view('templates-user/footer'); 
	}
	public function details()
	{		
			
		$id = $this->uri->segment(3); 
		$tour = $this->ModelTour->joinCategories(['tournament.id_tour' => $id])->result(); 
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
			$data['tittle'] = 'Game';
			$data['top'] = '|Z| Tournament';
			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
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

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('tournament/detailTour',$data);
			$this->load->view('templates-user/footer'); 
	}
	public function tourData()
	{
		$data['title'] = 'Tour Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['tour'] = $this->ModelTour->joinCategories1()->result();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('tournament/tourData.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function inputTour()
	{
		$data['title'] = 'Input Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['tour'] = $this->ModelTour->joinCategories1()->result();
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('game', 'Game', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('organizer', 'Organizer', 'required|trim');
		$this->form_validation->set_rules('start', 'Start', 'required|trim');
		$this->form_validation->set_rules('desc', 'Desc', 'required|trim');
		$this->form_validation->set_rules('image', 'Image', 'required');

		$config['upload_path'] = './assets/images/Tournament/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size'] = '5000'; 
		$config['file_name'] = 'tour' . time();

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('tournament/inputTour.php',$data);
			$this->load->view('admin/footer.php');
		} 
		else 
		{ 
			if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'name_tour' => $this->input->post('name', true),
                'game_tour' => $this->input->post('game', true),
                'id_categories' => $this->input->post('category', true),
                'organizer' => $this->input->post('organizer', true),
                'date_tour' => $this->input->post('start', true),
                'description_tour' => $this->input->post('desc', true),
                'image_tour' => $gambar,
                'date_'=> date('Y-m-d'),
            ];

            $this->ModelTour->saveTour($data);
            redirect('Tournament/tourData');
		}	
	}
	public function editTour()
	{
		$data['title'] = 'Edit Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['tour'] = $this->ModelTour->joinCategories1()->result();
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('game', 'Game', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('organizer', 'Organizer', 'required|trim');
		$this->form_validation->set_rules('start', 'Start', 'required|trim');
		$this->form_validation->set_rules('desc', 'Desc', 'required|trim');

		$config['upload_path'] = './assets/images/Tournament/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size'] = '5000'; 
		$config['file_name'] = 'tour' . time();

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('tournament/editTour.php',$data);
			$this->load->view('admin/footer.php');
		} 
		else 
		{ 
			if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/images/Tournament/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'name_tour' => $this->input->post('name', true),
                'game_tour' => $this->input->post('game', true),
                'id_categories' => $this->input->post('category', true),
                'organizer' => $this->input->post('organizer', true),
                'date_tour' => $this->input->post('start', true),
                'description_tour' => $this->input->post('desc', true),
                'image_tour' => $gambar
            ];

            $this->ModelTour->updateTour($data, ['id_tour' => $this->input->post('id')]);
            redirect('Tournament/tourData');
		}	
	}
	public function deleteTour()
	{
		$id=$this->uri->segment(3);
		$this->ModelMerchan->deleteData(['id_tour' => $id], 'tournament');
		redirect('Tournament/tourData');
	}
}