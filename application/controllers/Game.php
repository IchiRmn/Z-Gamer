<?php 
class Game extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelGame', 'ModelUser']);
		 
	} 
	public function index()
	{ 
		$data = [
			'tittle'=>'Game',
			'game' =>$this->ModelGame->getGame()->result(),
		]; 
		
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart(); 

			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
			$data['top'] = '|Z| News';

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('game/news',$data);
			$this->load->view('templates-user/footer'); 
	}

	public function detailNews()
	{		
			
		$id = $this->uri->segment(3); 
		$game = $this->ModelGame->gameWhere(['game.id' => $id],'game')->result(); 
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 	
			$data['tittle'] = 'Game';
			$data['top'] = '|Z| News';
			$data['name'] = $user['name'];
			$data['img'] = $user['image'];
			$data['mmqty'] =$this->ModelMerchan->qty_m();
			$data['cart'] = $this->ModelMerchan->getCart();
			foreach ($game as $g) {
				$data['judul']=$g->judul;
				$data['image']=$g->image;
				$data['source']=$g->source;
				$data['editor']=$g->editor;
				$data['date_g']=$g->date_created;
				$data['isi']=$g->isi;
				$data['id']=$id;
			}

			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('game/detailNews',$data);
			$this->load->view('templates-user/footer'); 
	}
	public function newsData()
	{
		$data['title'] = 'News Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['game'] =$this->ModelGame->getGame()->result();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('game/newsData.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function inputNews()
	{
		$data['title'] = 'Input News';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['game'] =$this->ModelGame->getGame()->result();

		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('desc', 'Desc', 'required|trim');
		$this->form_validation->set_rules('source', 'Source', 'required|trim');
		$this->form_validation->set_rules('image', 'Image', 'required');

		$config['upload_path'] = './assets/images/Game/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size'] = '5000'; 
		$config['file_name'] = 'news' . time();

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('game/inputNews.php',$data);
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
                'judul' => $this->input->post('title', true),
                'image' => $gambar,
                'isi' => $this->input->post('desc', true),
                'editor' => $user['name'],
                'source' => $this->input->post('source', true),
                'date_created' => date('Y-m-d'),
            ];

            $this->ModelGame->saveGame($data);
            redirect('game/newsData');
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('game/inputNews.php',$data);
		$this->load->view('admin/footer.php');
		}	
	}
	public function editNews()
	{
		$id = $this->uri->segment(3);

		$data['title'] = 'Edit News';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['game'] =$this->ModelGame->getGame()->result();

		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('desc', 'Desc', 'required|trim');
		$this->form_validation->set_rules('source', 'Source', 'required|trim');

		$config['upload_path'] = './assets/images/Game/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size'] = '5000'; 
		$config['file_name'] = 'news' . time();

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('game/editNews.php',$data);
			$this->load->view('admin/footer.php');
		} 
		else 
		{ 
			if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/images/Game/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'judul' => $this->input->post('title', true),
                'isi' => $this->input->post('desc', true),
                'source' => $this->input->post('source', true),
                'image' => $gambar
            ];

            $this->ModelGame->updateGame($data, ['id' => $this->input->post('id')]);
            redirect('game/newsData');
		}	
	}
	public function deleteNews()
	{
		$id=$this->uri->segment(3);
		$this->ModelMerchan->deleteData(['id' => $id], 'game');
		redirect('Game/newsData');
	}
}
