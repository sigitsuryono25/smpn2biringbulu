<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('home');
    }

    function direktori_guru($id) {
        $data['judul'] = $this->galeri->getGaleriWithCondition(['gallery.id_album' => $id])->row()->jdl_album;
        $data['guru'] = $this->galeri->getGaleriWithCondition(['.gallery.id_album' => $id])->result();
        $this->load->view('pages/direktori_guru', $data);
    }

    function info_sekolah($id) {
        $data['info'] = $this->berita->getBeritaWithCondition(['id_kategori' => $id])->result();
        $this->load->view('pages/info_sekolah', $data);
    }

    function video() {
        $data['judul'] = "Video";
        $data['video'] = $this->video->getVideoWithCondition([])->result();
//        print_r($data);
        $this->load->view('pages/video', $data);
    }
    
    function reader($id){
        $data['berita'] = $this->berita->getBeritaWithCondition(['id_berita' => $id])->row();
        
    }

}
