<?php
function check_login(){
    session_start();
    return true;
}
function authentic($email,$password){
    $sql = "select email,username,salt,password from users where email='".$email."' ";
    $ci = & get_instance();
    $qry = $ci->db->query($sql);
    $res = $qry->result();
    $salt = substr($res[0]->password,0,10); 
    if ($salt.substr(sha1($salt.$password),0,-10)===$res[0]->password){
        create_session($res[0]->email,$res[0]->username);
        return true;
    }
    return false;
}
function create_session($email,$username){
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["username"] = $username;
}
function get_sess_username(){
    if(isset($_SESSION["username"])){
        echo humanize($_SESSION["username"]);
    }else{
        redirect("/app/login");
    }
}