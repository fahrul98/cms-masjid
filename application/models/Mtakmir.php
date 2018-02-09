<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtakmir extends CI_Model {

/*
isi :
1. Ustadz. operasi CRUD
vars:
tkid
tknama
tknotelp
tkjabatan
tkmasajabatan
mediaid

input->proses->hapus dari memori

unset(variabel) => hapus variabel dari memori
*/

	public function __construct(){
		parent::__construct();
	//load model
	}

	public function tampiltakmir($data = null){
		// jika null maka fullselect, else ambil tk2id
		if ($data===null||$data==null) {
			$q = $this->db->query("select * from cmtakmirm");
		}else{
			$q = $this->db->query("select * from cmtakmirm where tkid=?",array($data['tkid']));
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function tambahtakmir($data){
		// $q = $this->db->query("insert into cmustadz (usnama,usnotelp,usalamat) values (?,?,?,?)",
		$q = $this->db->query("insert into cmtakmirm (tknama,tknotelp,tkjabatan,tkmasajabatan,mediadir) values (?,?,?,?,?)",
		array(
			// $data['usid'],
			$data['tknama'],
			$data['tknotelp'],
			$data['tkjabatan'],
			$data['tkmasajabatan'],
			$data['filename']
		));

		unset($data);
	}

	public function ubahtakmir($data){
		if ($data['mediaid']=='') {
			$data['mediaid']=1;
		}
		$q = $this->db->query("update cmtakmirm set tknama=?,tknotelp=?,tkjabatan=?,tkmasajabatan=?,mediadir=? where tkid=?",
		array(
			// $data['usid'],
			$data['tknama'],
			$data['tknotelp'],
			$data['tkjabatan'],
			$data['tkmasajabatan'],
			$data['filename'],
			$data['tkid']
		));

		unset($data);
	}

	public function hapustakmir($data){
		$q = $this->db->query("delete from cmtakmirm where tkid=?",array($data['tkid']));
		unset($data,$q);
	}
}
