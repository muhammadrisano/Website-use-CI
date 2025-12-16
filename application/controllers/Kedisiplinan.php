<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kedisiplinan extends CI_Controller
{
    public function index()
    {
        echo "ini halaman kedisiplinan";
    }
    public function kehadiran()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('kedisiplinan/kehadiran.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function atribut()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('kedisiplinan/atribut.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function upacara()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('kedisiplinan/upacara.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function berprilaku()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('kedisiplinan/berprilaku.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
}
