<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->view('home');
    }
}
?>

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
}