<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Staticpage_m
 *
 * @author sigit
 */
class Staticpage_m extends CI_Model {

    //put your code here

    function getStaticpageWithLimit($limit = 4, $start = 0) {
        return $this->db->select("*")
                        ->from('halamanstatis')
                        ->order_by("id_halaman", "DESC")
                        ->limit($limit, $start)
                        ->get();
    }

    function getStaticpageWithCondition($where) {
        return $this->db->select("*")
                        ->from('halamanstatis')
                        ->order_by("id_halaman", "DESC")
                        ->where($where)
//                        ->get_compiled_select();
                        ->get();
    }

    function getStaticpageWithConditionAndLimit($where, $limit = 5, $start = 0) {
        return $this->db->select("*")
                        ->from('halamanstatis')
                        ->order_by("id_halaman", "DESC")
                        ->where($where)
                        ->limit($limit, $start)
                        ->get();
    }

}
