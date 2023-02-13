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
		$this->load->view('layouts/app');
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
		$this->load->view('layouts/app');
		$this->load->view('Investment/health-insurance');
		$this->load->view('layouts/footer');
	}
}
