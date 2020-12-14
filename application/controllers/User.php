<?php
defined('BASEPATH') or exit('NO Direct Script Access Allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('front/template');
    }
}
