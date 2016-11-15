<?php
class Client extends CI_Model{
    function get(){
        $ci = & get_instance();
        $sql = "select a.id,name,a.alias,a.address,b.username am  from clients a ";
        $sql.= "left outer join users b on b.id=a.sale_id";
        $qry = $ci->db->query($sql);
        return $qry->result();
    }
}