<?php 
class Shop extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelUser','ModelMerchan']);

	} 
	public function index()
	{ 
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['merch'] = $this->ModelMerchan->getMerch()->result();
		$data['ctg'] = $this->ModelMerchan->getCategory()->result();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		
		$data['tittle']='Shop';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Merchan';


		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('shop/shop',$data);
		$this->load->view('templates-user/footer'); 
	}
	public function Category()
	{ 
		$id = $this->uri->segment(3);
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['merch'] = $this->ModelMerchan->joinCategoryM(['category_merch.id_mcategory'=>$id])->result(); 
		$data['ctg'] = $this->ModelMerchan->getCategory()->result();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart(); 
		
		$data['tittle']='Shop';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Merchan';

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('shop/shop',$data);
		$this->load->view('templates-user/footer'); 
	}
	public function detailMerchan()
	{ 
		$id=$this->uri->segment(3);
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$merch = $this->ModelMerchan->joinCategoryM(['merchan.id_merch'=>$id])->result();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart(); 
		
		$data['tittle']='Shop';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Merchan';
		$data['mrc'] = $this->ModelMerchan->getMerch()->result();


		foreach ($merch as $m) {
			$data['id_me'] = $m->id_merch;
			$data['name_m'] = $m->name_merch;
			$data['price_m'] = $m->price_merch;
			$data['category_m'] =$m->mcategory;
			$data['stock_m'] = $m->stock_merch;
			$data['image_m'] = $m->image_merch;
			$data['desc_m'] = $m->desc_merch;
			$data['fyi_m'] = $m->fyi_merch;
			$data['tac_m'] = $m->tac_merch;
			$data['date_m'] = $m->date_merch; 
		}

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('shop/detailMerchan',$data);
		$this->load->view('templates-user/footer'); 
	}


	public function detailCart()
	{ 
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['merch'] = $this->ModelMerchan->getMerch()->result();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		$data['ship'] = $this->db->get('shipping')->result(); 
		
		$data['tittle']='Shop';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Merchan';

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('shop/cart',$data);
		$this->load->view('templates-user/footer'); 
	}

	public function AddToCart()
	{
		cek_login();

		$id=$this->uri->segment(3);
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$d = $this->db->query("Select*from merchan where id_merch='$id'")->row();
		$same = $this->ModelMerchan->getDataWhere('cart', ['merch_id' => $id])->num_rows();
		$data = [
				'user_id' => $user['id'],
				'user_email' => $user['email'],
				'merch_id' => $d->id_merch,
				'merch_name' => $d->name_merch,
				'merch_price' => $d->price_merch,
				'merch_image' => $d->image_merch,
				'merch_qty' => 1,
				];

		if ($same > 0) {
			$this->db->query("UPDATE cart SET merch_qty = merch_qty+1 WHERE merch_id='$id'");
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{

		$this->ModelMerchan->insertData('cart',$data);
		redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function deleteCart() 
	{ 
		$merch_id=$this->uri->segment(3);
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$id_user = $user['id'];
		$this->ModelMerchan->deleteData(['merch_id' => $merch_id], 'cart'); 
		$empty = $this->db->query("select*from cart where user_id='$id_user'")->num_rows(); 
			if ($empty < 1) 
				{ 
					$this->session->set_flashdata('alert', '<div class="alert alert-massege alert-danger" role="alert">Empty Cart!</div>'); 
					redirect('Shop'); 
				} 
				else 
					{ 
						redirect(base_url() . 'Shop/detailCart'); 
					} 
	}
	public function MinusCart()
	{

		$id=$this->uri->segment(3);
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$same = $this->ModelMerchan->getDataWhere('cart', ['merch_id' => $id])->result();
		$d = $this->db->query("Select*from cart where merch_id='$id'")->row();


		if ( $d->merch_qty > 1) {
		$this->db->query("UPDATE cart SET merch_qty = merch_qty-1 WHERE merch_id='$id'");
			redirect($_SERVER['HTTP_REFERER']);
			
		} else {	
			$this->deleteCart();
		}
	}
	public function Checkout()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['merch'] = $this->ModelMerchan->getMerch()->result();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		$mqqty= $this->ModelMerchan->qty_m();
		$crt = $this->db->get('cart');
		
		$data['tittle']='Shop';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Merchan';

		$this->form_validation->set_rules('country','country','required',['required'=>'Select your country']);
		$this->form_validation->set_rules('state','state','required',['required'=>'Must be filled']);
		$this->form_validation->set_rules('postcode','postcode','required',['required'=>'Must be filled']);

		$ship = $this->input->post('country');
		$d = $this->db->query("Select*from shipping where id_ship='$ship'")->row();
		$sub_total = $this->input->post('sub_total');

		$total = $d->ship_rate + $sub_total;

		if ($this->form_validation->run()==false)
		{
			$this->load->view('templates-user/header', $data);
			$this->load->view('templates-user/topbar',$data);
			$this->load->view('shop/cart',$data);
			$this->load->view('templates-user/footer');
		}else{
			
			$ddt = [
				'id_invoice' => $this->ModelMerchan->inCode('invoice','id_invoice'),
				'id_user' => $user['id'],
				'username' => $user['name'],
				'email_inv' => $user['email'],
				'qty_merch' => $mqqty->mqty,
				'total_merch' => $total,
				'country_inv' => $ship,
				'city_inv' => $this->input->post('state'),
				'postcode_inv'=> $this->input->post('postcode'),
				'date_inv'=> date('Y-m-d H:m:s'),
				];
			$this->ModelMerchan->insertData('invoice', $ddt);

			foreach ($crt->result_array() as $crt) {
			$detail = array(
				'id_inv' => $ddt['id_invoice'],
				'merch_id' => $crt['merch_id'],
				'merch_qty' => $crt['merch_qty'],
			);
			$this->db->insert('detail_inv', $detail);
			}
			 
			$this->ModelMerchan->blankData('cart'); 
			redirect('Shop/Invoice');
		}
	}

	public function Invoice()
	{ 
		

		$id = $this->db->insert_id(); 
		$data['inv'] = $this->ModelMerchan->joinDetailInv()->result();
		// $inv = $this->ModelMerchan->joinDetailInv(['detail_inv.id_invoice' => $id])->result();
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['mmqty'] =$this->ModelMerchan->qty_m();
		$data['cart'] = $this->ModelMerchan->getCart();
		$data['ship'] = $this->db->get('shipping')->result(); 
		
		$data['tittle']='Shop';
		$data['name'] = $user['name'];
		$data['img'] = $user['image'];
		$data['top'] = '|Z| Merchan';

		$inv = $this->ModelMerchan->joinInv()->result();
		
		foreach ($inv as $v) {
			$data['name_inv'] = $v->username;
			$data['email_inv'] = $v->email_inv;
			$data['qty_inv'] = $v->qty_merch;
			$data['tot_merch'] =$v->total_merch;
			$data['country_in'] = $v->country_inv;
			$data['city_inv'] = $v->city_inv;
			$data['post_'] = $v->postcode_inv;
			$data['dirc'] =$v->direction;
			$data['ship_r'] = $v->ship_rate;
		}

		$this->load->view('templates-user/header', $data);
		$this->load->view('templates-user/topbar',$data);
		$this->load->view('shop/invoice',$data);
		$this->load->view('templates-user/footer'); 
	}
	public function merchData()
	{
		$data['title'] = 'Merch Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['merch'] = $this->ModelMerchan->joinCategoryM1()->result();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('shop/merchData.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function inputMerch()
	{
		$data['title'] = 'Input Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('price', 'Price', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('stock', 'Stock', 'required|trim');
		$this->form_validation->set_rules('store', 'Store', 'required|trim');
		$this->form_validation->set_rules('desc', 'Desc', 'required|trim');
		$this->form_validation->set_rules('fyi', 'Fyi', 'required|trim');
		$this->form_validation->set_rules('tac', 'Tac', 'required|trim');
		$this->form_validation->set_rules('image', 'image', 'required');

		$config['upload_path'] = './assets/images/Shop/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size'] = '5000'; 
		$config['file_name'] = 'tour' . time();

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('Shop/inputMerch.php',$data);
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
                'name_merch' => $this->input->post('name', true),
                'price_merch' => $this->input->post('price', true),
                'category_merch' => $this->input->post('category', true),
                'stock_merch' => $this->input->post('stock', true),
                'store_merch' => $this->input->post('store', true),
                'desc_merch' => $this->input->post('desc', true),
                'fyi_merch' => $this->input->post('fyi', true),
                'tac_merch' => $this->input->post('tac', true),
                'image_merch' => $gambar,
                'date_merch'=> date('Y-m-d'),
            ];

            $this->ModelMerchan->saveMerchan($data);
            redirect('Shop/merchData');
		}	
	}
	public function editMerch()
	{
		$data['title'] = 'Edit Data';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('price', 'Price', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('stock', 'Stock', 'required|trim');
		$this->form_validation->set_rules('store', 'Store', 'required|trim');
		$this->form_validation->set_rules('desc', 'Desc', 'required|trim');
		$this->form_validation->set_rules('fyi', 'Fyi', 'required|trim');
		$this->form_validation->set_rules('tac', 'Tac', 'required|trim');

		$config['upload_path'] = './assets/images/Shop/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size'] = '5000'; 
		$config['file_name'] = 'tour' . time();

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false) 
		{ 
			$this->load->view('admin/header.php',$data);
			$this->load->view('Shop/editMerch.php',$data);
			$this->load->view('admin/footer.php');
		} 
		else 
		{ 
			if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/images/Shop/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'name_merch' => $this->input->post('name', true),
                'price_merch' => $this->input->post('price', true),
                'category_merch' => $this->input->post('category', true),
                'stock_merch' => $this->input->post('stock', true),
                'store_merch' => $this->input->post('store', true),
                'desc_merch' => $this->input->post('desc', true),
                'fyi_merch' => $this->input->post('fyi', true),
                'tac_merch' => $this->input->post('tac', true),
                'image_merch' => $gambar
            ];

            $this->ModelMerchan->updateMerchan($data, ['id_merch' => $this->input->post('id')]);
            redirect('Shop/merchData');
		}	
	}
	public function deleteMerch()
	{
		$id=$this->uri->segment(3);
		$this->ModelMerchan->deleteData(['id_merch' => $id], 'merchan');
		redirect('Shop/merchData');
	}
}
