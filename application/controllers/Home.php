<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
        $this->load->helper(array('html'));
    }

    public function index()
    {
        $this->load->view('home/index');
    }
}