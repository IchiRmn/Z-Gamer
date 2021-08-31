<?php 
class Report extends CI_Controller 
{
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelTour']);
		cek_login();
		cek_user();
		 
	} 
	public function UserReport()
	{
		$data['title'] = 'Report';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['user'] = $this->ModelUser->joinRole()->result_array();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('profile/report.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function UserReportPrint()
	{
		$data['user'] = $this->ModelUser->joinRole()->result_array();

		$this->load->view('Profile/reportPrint', $data);
	}
	public function UserReportPDF()
	{
		$this->load->library('dompdf_gen');

		$data['user'] = $this->ModelUser->joinRole()->result_array();

		$this->load->view('profile/reportPDF',$data);

		$paper_size = 'A4'; //ukuran kertas
		$orientation = 'landscape'; //tipe format kertas potrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		//Convert PDf
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("UserReport.pdf", array('Attachment' => 0));
		// nama file pdf yang di hasilkan 
	}
	public function UserReportExcel()
	{
		$data = array(
			'title' => 'User Report', 
			'user' => $this->ModelUser->joinRole()->result_array());
		$this->load->view('Profile/reportExcel',$data);
	}
	public function NewsReport()
	{
		$data['title'] = 'Report';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['game'] = $this->ModelGame->getGame()->result_array();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('game/report.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function NewsReportPrint()
	{
		$data['game'] = $this->ModelGame->getGame()->result_array();

		$this->load->view('game/reportPrint', $data);
	}
	public function NewsReportPDF()
	{
		$this->load->library('dompdf_gen');

		$data['game'] = $this->ModelGame->getGame()->result_array();

		$this->load->view('game/reportPDF',$data);

		$paper_size = 'A4'; //ukuran kertas
		$orientation = 'landscape'; //tipe format kertas potrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		//Convert PDf
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("NewsReport.pdf", array('Attachment' => 0));
		// nama file pdf yang di hasilkan 
	}
	public function NewsReportExcel()
	{
		$data = array(
			'title' => 'News Report', 
			'game' => $this->ModelGame->getGame()->result_array());
		$this->load->view('game/reportExcel',$data);
	}
	public function TourReport()
	{
		$data['title'] = 'Report';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['tour'] = $this->ModelTour->joinCategories1()->result_array();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('tournament/report.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function TourReportPrint()
	{
		$data['tour'] = $this->ModelTour->joinCategories1()->result_array();

		$this->load->view('tournament/reportPrint', $data);
	}
	public function TourReportPDF()
	{
		$this->load->library('dompdf_gen');

		$data['tour'] = $this->ModelTour->joinCategories1()->result_array();

		$this->load->view('tournament/reportPDF',$data);

		$paper_size = 'A4'; //ukuran kertas
		$orientation = 'landscape'; //tipe format kertas potrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		//Convert PDf
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("TournamentReport.pdf", array('Attachment' => 0));
		// nama file pdf yang di hasilkan 
	}
	public function TourReportExcel()
	{
		$data = array(
			'title' => 'Tournament Report', 
			'tour' => $this->ModelTour->joinCategories1()->result_array());
		$this->load->view('tournament/reportExcel',$data);
	}
	public function MerchReport()
	{
		$data['title'] = 'Report';

		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['name']=$user['name'];
		$data['img']=$user['image'];

		$data['merch'] = $this->ModelMerchan->joinCategoryM1()->result_array();
		
		$this->load->view('admin/header.php',$data);
		$this->load->view('Shop/report.php',$data);
		$this->load->view('admin/footer.php');	
	}
	public function MerchReportPrint()
	{
		$data['merch'] = $this->ModelMerchan->joinCategoryM1()->result_array();

		$this->load->view('shop/reportPrint', $data);
	}
	public function MerchReportPDF()
	{
		$this->load->library('dompdf_gen');

		$data['merch'] = $this->ModelMerchan->joinCategoryM1()->result_array();

		$this->load->view('shop/reportPDF',$data);

		$paper_size = 'A4'; //ukuran kertas
		$orientation = 'landscape'; //tipe format kertas potrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		//Convert PDf
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("MerchandiseReport.pdf", array('Attachment' => 0));
		// nama file pdf yang di hasilkan 
	}
	public function MerchReportExcel()
	{
		$data = array(
			'title' => 'Merchandise Report', 
			'merch' =>$this->ModelMerchan->joinCategoryM1()->result_array());
		$this->load->view('shop/reportExcel',$data);
	}
}