<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function index()
    {
        $this->load->model('Berita', 'ber');
        $this->load->model('Prestasi');
        $this->load->model('Events');
        $data['title'] = "Website SMAN 4 Padang";
        $data['berita'] = $this->ber->getBeritaFront();
        $data['prestasi'] = $this->Prestasi->getPrestasiFront();
        $data['events'] =  $this->Events->getEventsFront();
        $this->load->view('front-page/header.php', $data);
        $this->load->view('front-page/about.php', $data);
        $this->load->view('front-page/berita.php', $data);

        $this->load->view('front-page/prestasi.php', $data);
        $this->load->view('front-page/events.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }

    public function detailberita($id)
    {
        $this->load->model('Berita');
        $data['title'] = "Website SMAN 4 Padang";
        $data['detailberita'] = $this->Berita->detailBerita($id);
        $this->load->view('front-page/header.php', $data);
        $this->load->view('front-page/pages/detailberita', $data);
        $this->load->view('front-page/footer.php', $data);
    }
    public function kategori($id)
    {
        $this->load->model('Berita');
        $data['title'] = "Website SMAN 4 Padang";
        $data['kategoriberita'] = $this->Berita->kategoriBerita($id);
        $this->load->view('front-page/header.php', $data);
        $this->load->view('front-page/pages/kategoriberita', $data);
        $this->load->view('front-page/footer.php', $data);
    }
}
