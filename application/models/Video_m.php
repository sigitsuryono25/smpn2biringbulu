<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video_m
 *
 * @author sigit
 */
class Video_m extends CI_Model {

    //put your code here

    function getVideoWithLimit($limit = 4, $start = 0) {
        return $this->db->select("*")
                        ->from('video')
                        ->order_by("id_video", "DESC")
                        ->limit($limit, $start)
                        ->get();
    }

    function getVideoWithCondition($where) {
        return $this->db->select("*")
                        ->from('video')
                        ->order_by("id_video", "DESC")
                        ->where($where)
//                        ->get_compiled_select();
                        ->get();
    }

    function getVideoWithConditionAndLimit($where, $limit = 5, $start = 0) {
        return $this->db->select("*")
                        ->from('video')
                        ->order_by("id_video", "DESC")
                        ->where($where)
                        ->limit($limit, $start)
                        ->get();
    }

}
