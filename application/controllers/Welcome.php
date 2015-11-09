<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('krasinskiego_m');        
    }
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->show();
	}
        
        public function show() {
     
     $dane = $this->krasinskiego_m->get_all();
     $data['dane'] = $dane;
     
     $this->load->helper('url');
     $this->load->view('header');
     //$this->load->view('welcome_message',$data);
      $this->load->view('welcome_message',$data);
      
      $this->load->view('footer');
     
 }
}
