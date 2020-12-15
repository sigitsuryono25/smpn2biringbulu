<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berita_,
 *
 * @author sigit
 */
class Berita_m extends CI_Model {
    //put your code here
    
    function getBeritaWithLimit($limit = 5, $start = 0){
        return $this->db->select("*")
                ->from('berita')
                ->order_by("tanggal", "DESC")
                ->limit($limit, $start)
                ->get();
    }
    
    function getBeritaWithCondition($where){
        return $this->db->select("*")
                ->from('berita')
                ->order_by("tanggal", "DESC")
                ->where($where)
                ->get();
    }
    function getBeritaWithConditionAndLimit($where, $limit = 5, $start = 0){
        return $this->db->select("*")
                ->from('berita')
                ->order_by("tanggal", "DESC")
                ->where($where)
                ->limit($limit, $start)
                ->get();
    }
}
