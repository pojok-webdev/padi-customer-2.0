<?php
class User extends CI_Model{
    function get(){
        $ci = & get_instance();
        $sql = "select a.id,a.email,username,roles,branches,case status when '0' then 'Non Aktif' when '1' then 'Aktif' end status  from users a ";
        $sql.= "left outer join (select a.user_id, group_concat(b.name) roles from roles_users a left outer join roles b on b.id=a.role_id group by user_id) b on b.user_id=a.id ";
        $sql.= "left outer join (select a.user_id,group_concat(b.name) branches from branches_users a left outer join branches b  on b.id=a.branch_id group by a.user_id) f on f.user_id=a.id ";
        $qry = $ci->db->query($sql);
        return $qry->result();
    }
}