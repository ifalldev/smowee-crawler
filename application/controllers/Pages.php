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
  }

  public function search($item = 'seda') {

  }
}