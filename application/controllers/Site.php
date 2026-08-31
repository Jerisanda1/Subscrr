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
}