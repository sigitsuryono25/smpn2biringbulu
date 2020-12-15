<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Galeri_m
 *
 * @author sigit
 */
class Galeri_m extends CI_Model {

    //put your code here

    function getGaleriWithLimit($limit = 4, $start = 0) {
        return $this->db->select("*")
                        ->from('gallery')
                        ->order_by("id_gallery", "DESC")
                        ->limit($limit, $start)
                        ->get();
    }

    function getGaleriWithCondition($where) {
        return $this->db->select("*")
                        ->from('gallery')
                        ->join('album', 'gallery.id_album=album.id_album')
                        ->order_by("id_gallery", "DESC")
                        ->where($where)
                        ->get();
    }

    function getGaleriWithConditionAndLimit($where, $limit = 5, $start = 0) {
        return $this->db->select("*")
                        ->from('gallery')
                        ->order_by("id_gallery", "DESC")
                        ->where($where)
                        ->limit($limit, $start)
                        ->get();
    }

}
