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
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('home');
    $this->load->view('footer');
  }

  public function search($item = 'seda') {

  }
}