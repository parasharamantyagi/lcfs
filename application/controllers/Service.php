<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('index');

	}

	public function whatIsLifeInsurance()
	{
		$this->load->view('layouts/app');
		$this->load->view('service/what-is-life-insurance');
		$this->load->view('layouts/footer');
	}


	public function companyOfProfessionals()
	{
		$this->load->view('layouts/app');
		$this->load->view('service/company-of-professionals');
		$this->load->view('layouts/footer');
	}


	public function weLoveOurClients()
	{
		$this->load->view('layouts/app');
		$this->load->view('service/we-love-our-clients');
		$this->load->view('layouts/footer');
	}
}
