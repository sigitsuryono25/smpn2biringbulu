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
        $data['gambar'] = (!empty($result->gambar)) ? $result->gambar : null;
        $this->load->view("headfoot/header");
        $this->load->view("pages/static_page", $data);
        $this->load->view("headfoot/footer");
    }

}
