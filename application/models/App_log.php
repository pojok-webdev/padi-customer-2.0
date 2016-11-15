<?php
class App_log extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getlastactivity(){
		$sql = "select b.username,a.createdate,c.grp from app_logs a ";
		$sql.= "left outer join users b on b.username=a.user ";
		$sql.= "left outer join (select user_id,group_concat(b.name order by b.name asc separator ',')grp from groups_users a left outer join groups b on b.id=a.group_id group by user_id) c on c.user_id=b.id ";
		$sql.= "where a.user is not null ";
		$sql.= "order by createdate desc limit 1,10 ";
		$ci = & get_instance();
		$query = $ci->db->query($sql);
		$res = $query->result();
		return $res;
	}
	function getamount(){
		$sql = "select user,cnt from (select user,count(user) cnt from app_logs a group by user ) a order by cnt desc limit 1,10;";
		$ci = & get_instance();
		$query = $ci->db->query($sql);
		$res = $query->result();
		return $res;
	}
}
