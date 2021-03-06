<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  public function __construct()
  {
    parent::__construct() ;
    $this->load->model('Host_model') ;

  }
  public function index()
	{
		$this->load->helper('url');
		$this->load->view('first_page');
	}

  public function main_page(){
    unset($_SESSION['chkin_session']);
    unset($_SESSION['chkout_session']);
    unset($_SESSION['price_session']);
    $data['dataImage'] = $this->Host_model->get_cover_photo() ;
    $data['page']='main/main_pages';
    $this->load->view('menu/content',$data);

  }
  public function intruction(){
    $data['page']='main/intruction';
    $this->load->view('menu/content',$data);
  }

  public function contact_us()
  {
    $data['page'] = 'main/contact_us' ;
    $this->load->view('menu/content',$data) ;
  }
  public function term_of_use()
  {
    $data['page'] = 'main/term_of_use' ;
    $this->load->view('menu/content',$data) ;
  }
  public function privacy_policy()
  {
    $data['page'] = 'main/privacy_policy' ;
    $this->load->view('menu/content',$data) ;
  }
  public function listing_show()
  {
    $data['page'] = 'main/listing_show' ;
    $this->load->view('main/listing_show',$data) ;
  }
  //show listing detail from mainpage
  public function detail($carID)
  {
    $data['show_chosen'] = $this->Host_model->get_car($carID) ;
    $data['page'] = 'main/show_detail' ;
    $this->load->view('menu/content',$data) ;
  }

}
