<?php
class Prospect extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get(){
        $ci = & get_instance();
        $sql = "select a.id,a.name,a.alias,a.address, b.username am from clients a ";
        $sql.= "left outer join users b on b.id=a.sale_id ";
        $sql.= "where a.status='1' ";
        $query = $ci->db->query($sql);
        return $query->result();
    }
}