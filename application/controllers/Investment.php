<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investment extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('index');

	}

	public function Resp()
	{
		$this->load->view('layouts/app');
		$this->load->view('Investment/resp');
		$this->load->view('layouts/footer');
	}


	public function Rrsp()
	{
		$this->load->view('layouts/app-1');
		$this->load->view('Investment/rrsp');
		$this->load->view('layouts/footer');
	}


	public function Tfsa()
	{
		// $this->load->view('layouts/app');
		$this->load->view('layouts/app-1');
		$this->load->view('Investment/tfsa');
		$this->load->view('layouts/footer');
	}
	
	public function loanToInvest()
	{
		$this->load->view('layouts/app');
		$this->load->view('Investment/loan-to-invest');
		$this->load->view('layouts/footer');
	}

	public function healthInsurance()
	{
		$dataArray = array('image'=>base_url("public/images/image-3.jpg"));
		$dataArray['contant'] = lcfs_rrsp($this->uri->segment(1))['contant'];
		$dataArray['page_title'] = lcfs_rrsp($this->uri->segment(1))['heading'];
		if($this->uri->segment(1) === 'super-visa-medical-insurance'){
			$dataArray['image'] = base_url("public/images/image-9-1170x658.jpg");
		}else if($this->uri->segment(1) === 'life-insurance'){
			$dataArray['image'] = base_url("public/images/image-10-1170x658.jpg");
		}else if($this->uri->segment(1) === 'home-insurance'){
			$dataArray['image'] = base_url("public/images/image-11.jpg");
		}else if($this->uri->segment(1) === 'travel-insurance'){
			$dataArray['image'] = base_url("public/images/image-13.jpg");
		}else if($this->uri->segment(1) === 'super-visa-insurance'){
			$dataArray['image'] = base_url("public/images/image-12.jpg");
		}else if($this->uri->segment(1) === 'deposit-insurance'){
			$dataArray['image'] = base_url("public/images/image_4.jpg");
		}else if($this->uri->segment(1) === 'renters-insurance'){
			$dataArray['image'] = base_url("public/images/image-8.jpg");
		}else if($this->uri->segment(1) === 'pension-term-assurance'){
			$dataArray['image'] = base_url("public/images/image-7.jpg");
		}
		$this->load->view('layouts/app');
		$this->load->view('Investment/health-insurance',$dataArray);
		$this->load->view('layouts/footer');
	}
}