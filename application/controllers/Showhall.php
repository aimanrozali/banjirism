<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Showhall extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();

  }

  public function index()
  {
    $data = $this->db->select('*')->from('communityhall')->get()->result();
    //$data['title'] = "Community Hall";
    $title = "Community Hall";
    //$this->load->view('templates/header', $title);
    $this->load->view('showhall', ['data' => $data]);
    $this->load->view('templates/footer');
  }


}