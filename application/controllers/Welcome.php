<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('index');

	}

	public function index()
	{
		// print_r(lcfs_data('insurance_quote')['heading']);
		// die;
		$this->load->view('layouts/app');
		$this->load->view('welcome_message');
		$this->load->view('layouts/footer');
	}

	public function aboutUs()
    {
        $this->load->view('layouts/app');
        $this->load->view('about-us');
        $this->load->view('layouts/footer');
    }


    public function ourServices()
    {
        $this->load->view('layouts/app');
        $this->load->view('our-services');
        $this->load->view('layouts/footer');
    }

    public function contacts()
    {
        $this->load->view('layouts/app');
        $this->load->view('contacts');
        $this->load->view('layouts/footer');
    }

    public function cobblesGallery()
    {
        $this->load->view('layouts/app');
        $this->load->view('cobbles-gallery');
        $this->load->view('layouts/footer');
    }

    public function masonryGallery()
    {
		// $this->load->view('layouts/app');
		$this->load->view('masonry-gallery');
		// $this->load->view('layouts/footer');
    }

    public function evenGallery()
    {
      // $this->load->view('layouts/app');
      $this->load->view('even-gallery');
      // $this->load->view('layouts/footer');
    }

    // public function superVisaInsurance()
    // {
    //   $this->load->view('layouts/app');
    //   $this->load->view('super-visa-insurance');
    //   $this->load->view('layouts/footer');
    // }

    public function classicBlogColumn()
    {
        if($this->uri->segment(1) === 'classic-blog-1-column'){
            $this->load->view('layouts/app');
            $this->load->view('blog/classic-blog-1-column');
            $this->load->view('layouts/footer');
        } else if($this->uri->segment(1) === 'classic-blog-2-columns'){
            $this->load->view('layouts/app');
            $this->load->view('blog/classic-blog-2-columns');
            $this->load->view('layouts/footer');
        } else if($this->uri->segment(1) === 'classic-blog-3-columns'){
            $this->load->view('layouts/app');
            $this->load->view('blog/classic-blog-3-columns');
            $this->load->view('layouts/footer');
        } else if($this->uri->segment(1) === 'chess-2-columns'){
            $this->load->view('layouts/app');
            $this->load->view('blog/chess-2-columns');
            $this->load->view('layouts/footer');
        } else if($this->uri->segment(1) === 'chess-4-columns'){
            $this->load->view('layouts/app');
            $this->load->view('blog/chess-4-columns');
            $this->load->view('layouts/footer');
        } else if($this->uri->segment(1) === 'chess-6-columns'){
            $this->load->view('layouts/app');
            $this->load->view('blog/chess-6-columns');
            $this->load->view('layouts/footer');
        }else{

        }
        
    }
}
