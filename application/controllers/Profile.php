<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author sigit
 */
class Profile extends CI_Controller {

    //put your code here

    function show_content($idStatic) {
        $result = $this->static->getStaticpageWithCondition(['id_halaman' => $idStatic])->row();
        $data['content'] = $result->isi_halaman;
        $data['titles'] = $result->judul;
        $data['gambar'] = (!empty($result->gambar)) ? URL_IMAGE_BANNER . $result->gambar : null;
        $data['width'] = 150;
        $data['align'] = "left";
        $data['bottom'] = "mb-0";
        $data['from'] = 'non-berita';
        $data['full_height'] = "max-height-container";
        $this->load->view("headfoot/header");
        $this->load->view("pages/static_page", $data);
        $this->load->view("headfoot/footer");
    }

    function berita($idStatic) {
        $result = $this->berita->getBeritaWithCondition(['id_berita' => $idStatic])->row();
        $data['content'] = $result->isi_berita;
        $data['titles'] = $result->judul;
        $data['judul'] = $result->judul;
        $data['desk'] = strip_tags($result->isi_berita);
        $data['img'] = URL_IMAGE_NEWS . $result->gambar;
        $data['tanggal'] = $result->tanggal;
        $data['gambar'] = (!empty($result->gambar)) ? URL_IMAGE_NEWS . $result->gambar : null;
        $data['width'] = "100%";
        $data['align'] = "";
        $data['bottom'] = "mb-4";
        $data['full_height'] = "";
        $data['from'] = 'berita';
        $this->load->view("headfoot/header", $data);
        $this->load->view("pages/static_page");
        $this->load->view("headfoot/footer");
    }

}
