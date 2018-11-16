<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matematika extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form')); //mengambil helper yang sudah disediakan
	}
public function index()
{
	$this->load->view("v_matematika");
}
		public function perkalian()//membuat function perkalian
	{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('v1','Variabel 1','required|integer');
	$this->form_validation->set_rules('v2','Variabel 2','required|integer');
	if ($this->form_validation->run())
		{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['v2']=(int)$this->input->post('v2',true);
		$data['hasil']=$data['v1']*$data['v2'];
		}
	else
		{
		$data['v1']=0;
		$data['v2']=0;
		$data['hasil']=0;
		}
		$this->load->view('matematika/perkalian',$data);
	}
		public function pertambahan ()//membuat function pertambahan
	{	
	$this->load->library('form_validation');
	$this->form_validation->set_rules('v1','Variabel 1','required|integer');
	$this->form_validation->set_rules('v2','Variabel 2','required|integer');
	if ($this->form_validation->run())
		{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['v2']=(int)$this->input->post('v2',true);
		$data['hasil']=$data['v1']+$data['v2'];
		}
		else
		{
		$data['v1']=0;
		$data['v2']=0;
		$data['hasil']=0;
		}
		$this->load->view('matematika/pertambahan',$data);
	}
		public function pengurangan()
		{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['v2']=(int)$this->input->post('v2',true);
		$data['hasil']=$data['v1']-$data['v2'];
		$this->load->view('matematika/pengurangan',$data);	
		}
		public function pembagian()
	{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['v2']=(int)$this->input->post('v2',true);
		if ($data['v2']>0)
		$data['hasil']=$data['v1']/$data['v2'];
		else
		$data ['hasil']='Error, v2 tidak boleh 0 !';
		$this->load->view('matematika/pembagian',$data);
	}
		public function kuadrat()
	{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['hasil']=$data['v1']*$data['v1'];
		$this->load->view('matematika/kuadrat',$data);
	}
		public function akar()
	{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['hasil']=sqrt($data['v1']);
		$this->load->view('matematika/akar',$data);
	}
	public function log()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('v1','Variabel 1','required|integer');
		$this->form_validation->set_rules('v2','Variabel 2','required|integer');
		if ($this->form_validation->run())
		{
		$data['v1']=(int)$this->input->post('v1',true);
		$data['v2']=(int)$this->input->post('v2',true);
		$data['hasil']=log($data['v1'],$data['v2']);
		}
		else
		{
		$data['v1']=0;
		$data['v2']=0;
		$data['hasil']=0;
		}
		$this->load->view('matematika/log',$data);
	}
	public function gmail()
	{
		$this->load->view("matematika/gmail");
	}
}
