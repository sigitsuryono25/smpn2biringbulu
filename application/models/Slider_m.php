<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Slider
 *
 * @author sigit
 */
class Slider_m extends CI_Model {

    //put your code here
    function getSliderImage() {
        return $this->db->select("*")
                        ->from("slider")
                        ->order_by("id_slider", "DESC")
                        ->where(['aktif' => "Y"])
                        ->limit(5)
                        ->get();
    }

}
