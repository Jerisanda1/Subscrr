<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function privacy_policy()
    {
        $this->load->view('site/privacy_policy');
    }

    public function terms()
    {
        $this->load->view('site/terms');
    }

    public function journal()
    {
        $this->load->view('site/journal');
    }
}