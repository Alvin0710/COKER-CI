<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('home');
        $this->load->view('_partials/footer');
    }

    public function corona_map()
    {
        $this->load->view('_partials/header');
        $this->load->view('corona_map');
        $this->load->view('_partials/footer');
    }

    public function poster()
    {
        $this->load->view('_partials/header');
        $this->load->view('poster');
        $this->load->view('_partials/footer');
    }

    public function about()
    {
        $this->load->view('_partials/header');
        $this->load->view('about');
        $this->load->view('_partials/footer');
    }

    public function login()
    {
        $this->load->view('_partials/header');
        $this->load->view('login');
        $this->load->view('_partials/footer');
    }
}
