<?php 
class Home extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelGame', 'ModelUser']);
		 
	} 
	public function index()
	{ 
		$data = [
			'tittle'=>'Home',
			'game' =>$this->ModelGame->getGame()->result_array()
		]; 
			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart();
			
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
			
			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
	

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/slide', $data);
			//$this->load->view('templates-user/slide1');
			//$this->load->view('templates-user/slide2');
			$this->load->view('templates-user/footer'); 
	}

}
