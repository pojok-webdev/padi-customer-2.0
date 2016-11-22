<?php
function check_login(){
    return true;
}
function authentic($email,$password){
    $sql = "select email,salt,password from users where email='".$email."' ";
    $ci = & get_instance();
    $qry = $ci->db->query($sql);
    $res = $qry->result();
    $salt = substr($res[0]->password,0,10); 
    if ($salt.substr(sha1($salt.$password),0,-10)===$res[0]->password){
        return true;
    }
    return false;
}
function authentic1($email,$password){
    $sql = "select email,salt,password from users where email='".$email."' ";
    $ci = & get_instance();
    $qry = $ci->db->query($sql);
    $res = $qry->result();
    $salt = substr($res[0]->password,0,10); 
    return $salt.substr(sha1($salt.$password),0,-10);
}
function authentic2($email,$password){
    $sql = "select email,salt,password from users where email='".$email."' ";
    $ci = & get_instance();
    $qry = $ci->db->query($sql);
    $res = $qry->result();
    return $res[0]->password;
}
