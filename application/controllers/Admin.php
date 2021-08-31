<?php 
class Admin extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelTour']);
		cek_login();
		cek_user();
		 
	} 
	public function index()
	{ 
		$data['title'] = 'Admin';

		$data['user_sum']=$this->db->get('user')->num_rows();
		$data['news_sum']=$this->ModelGame->getGame()->num_rows();
		$data['tour_sum']=$this->ModelTour->getTour()->num_rows();
		$data['merch_sum']=$this->ModelMerchan->getMerch()->num_rows();

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['user'] = $this->db->get('user')->result();
		$data['inv'] = $this->db->get('invoice')->result();
		$data['league'] = $this->ModelTour->joinRegist()->result();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('admin/dashboard.php',$data);
		$this->load->view('admin/footer.php'); 
	}
}