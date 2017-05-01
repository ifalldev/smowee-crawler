<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Pages extends CI_Controller
{

  function __construct() {
    parent::__construct();
  }  

  public function index() {
    $this->renderPage('home');
  }

  public function search($item = 'seda') {
    // $this->renderPage('search');
  }

  private function renderPage($contentPage) {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view($contentPage);
    $this->load->view('footer');
  }
}