<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmedia extends CI_Model {

/*
isi :
1. Ustadz. operasi CRUD
vars:
usid
usnama
usnotelp
usalamat
mediaid

input->proses->hapus dari memori

unset(variabel) => hapus variabel dari memori
*/

	public function __construct(){
		parent::__construct();
	//load model
	}

	public function tampilmedia($data = null){
		// jika null maka fullselect, else ambil idpost
		if ($data===null||$data==null) {
			$q = $this->db->query("select * from cmmedia");
		}else{
			$q = $this->db->query("select * from cmmedia where mediaid=?",array($data['mediaidid']));
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function tambahmedia($data){
		// if ($data['mediaid']=='') {
		// 	$data['mediaid']=1;
		// }
		$data['metadata']='meta';
		$q = $this->db->query("insert into cmmedia (mmeta,mdir) values (?,?)",
		// $q = $this->db->query("insert into cmustadz (usnama,usnotelp,usalamat) values (?,?,?,?)",
		array(
			// $data['usid'],
			$data['metadata'],
			$data['mdir']
		));

		unset($data);
	}

	public function ubahust($data){
		if ($data['mediaid']=='') {
			$data['mediaid']=1;
		}
		$q = $this->db->query("update cmustadz set usnama=?,usnotelp=?,usalamat=?,mediaid=? where usid=?",
		array(
			$data['usnama'],
			$data['usnotelp'],
			$data['usalamat'],
			$data['mediaid'],
			$data['usid']
		));

		unset($data);
	}

	public function hapusust($data){
		$q = $this->db->query("delete from cmustadz where usid=?",array($data['usid']));
		unset($data,$q);
	}
}
