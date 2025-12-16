<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function index()
    {
        echo "profile";
    }
    public function sejarah()
    {

        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('profile-page/sejarah.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function visimisi()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('profile-page/visimisi.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function tujuan()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('profile-page/tujuan.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function akreditasi()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->view('front-page/header.php', $data);
        $this->load->view('profile-page/akreditasi.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
}
