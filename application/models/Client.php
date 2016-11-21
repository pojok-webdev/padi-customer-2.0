<?php
class Client extends CI_Model{
    function get(){
        $ci = & get_instance();
        $sql = "select a.id,name,a.alias,a.address,b.username am  from clients a ";
        $sql.= "left outer join users b on b.id=a.sale_id ";
        //$sql.= "limit 10 ";
        $qry = $ci->db->query($sql);
        return $qry->result();
    }
    function getall(){         
        $sql = "select a.id,name,a.alias,a.address,b.username am  from clients a ";
        $sql.= "left outer join users b on b.id=a.sale_id ";
        $sql.= "where a.active='1' ";
        //$sql.= "limit 10 ";
        $a = $this->db->query($sql);         
        $n = $a->num_rows();         
        $data = [];         
        $c = 1;         
        if ($n > 0) {             
            foreach ($a->result() as $r) {                 
                array_push($data,'["'.$r->name.'","'.$r->alias.'","'.$r->am.'","'.$r->address.'","'.$r->am.'","'.$c.'","'.$r->id.'","<a href=\"setlunas/'.$r->id.'\" class=\"fa fa-list\" data-toggle=\"tooltip\" data-placement=\"left\" title data-original-title=\"Pelunasan\"></a>"]');                 
                $c++;             
            }         
        }         
        return '{"data":['.implode(",",$data).']}';       
    }    
}