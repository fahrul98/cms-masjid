<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofiladmin extends CI_Model {

/*
isi :
1. Profiladmin masjid operasi RU
vars:
userid
username
userpass
userfullname
useremail
userurl
usertgldaftar
displayname
mediaid
useralamat
usertelp

input->proses->hapus dari memori

*/

	public function __construct(){
		parent::__construct();
	}

	public function adminlogin($data){
		$username = 0;
		$q = $this->db->query("select * from cmusers where username=? and userpass=?",array(
			$data['username'],
			md5($data['userpass'])
		));

		return $q;
	}

	public function tampilpadmin(){
		$q = $this->db->query("select * from cmusers");

		return $q;
		unset($q);
	}

	public function ubahpadmin($data){
		$q = $this->db->query("update cmusers set
		username=?,
		userpass=?,
		userfullname=?,
		useremail=?,
		displayname=?,
		mediaid=?,
		useralamat=?,
		usertelp=?,
		mediadir=? where userid=1",
		array(
			$data['username'],
			md5($data['userpass']),
			$data['userfullname'],
			$data['useremail'],
			$data['displayname'],
			$data['mediaid'],
			$data['useralamat'],
			$data['usertelp'],
			$data['filename']
		));

		// redirect(base_url('profiladmin'));
		unset($data);
	}

  //method untuk remember
  public function updateCookie($cookie){
    $q = $this->db->query("update cmusers set remember=? where userid=1", array($cookie));
  }

  public function getByCookie($cookie){  
     $q = $this->db->get_where('cmusers', array('cookie' => $cookie), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     } 
      unset($data,$q,$row);
  }  

	//Start: method tambahan untuk reset code  
   public function getUserInfo($id)  
   {  
     $q = $this->db->get_where('cmusers', array('userid' => $id), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }else{  
       error_log('no user found getUserInfo('.$id.')');  
       return false;  
     }  
   }  
   
  public function getUserInfoByEmail($email){  
     $q = $this->db->get_where('cmusers', array('useremail' => $email), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     } 
      unset($data,$q,$row);
   }  
   
   public function insertToken($user_id)  
   {    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(  
         'token'=> $token,  
         'userid'=>$user_id,  
         'created'=>$date  
       );  
     $query = $this->db->insert_string('cmtokens',$string);  
     $this->db->query($query);  
     return $token . $user_id;  
       
   }  
   
   public function isTokenValid($token)  
   {  
     $tkn = substr($token,0,30);  
     $uid = substr($token,30);     
       
     $q = $this->db->get_where('cmtokens', array(  
       'cmtokens.token' => $tkn,   
       'cmtokens.userid' => $uid), 1);               
           
     if($this->db->affected_rows() > 0){  
       $row = $q->row();         
         
       $created = $row->created;  
       $createdTS = strtotime($created);  
       $today = date('Y-m-d');   
       $todayTS = strtotime($today);  
         
       if($createdTS != $todayTS){  
         return false;  
       }  
         
       $user_info = $this->getUserInfo($row->userid);  
       return $user_info;  
         
     }else{  
       return false;  
     }  
       
   }   
   
   public function updatePassword($post)  
   {    
     $this->db->where('userid', $post['userid']);  
     $this->db->update('cmusers', array('userpass' => md5($post['userpass'])));      
     return true;  
   }   
   //End: method tambahan untuk reset code  

}
