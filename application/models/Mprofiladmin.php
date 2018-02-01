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
			$data['userpass']
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
		usertelp=? where userid=1",
		array(
			$data['username'],
			$data['userpass'],
			$data['userfullname'],
			$data['useremail'],
			$data['displayname'],
			$data['mediaid'],
			$data['useralamat'],
			$data['usertelp']
		));

		redirect(base_url('profiladmin'));
		unset($data);
	}

}
