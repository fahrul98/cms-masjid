<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpost extends CI_Model {

/*
isi :
1. Post. operasi CRUD
vars:
postid
psbuat
psubah
tagid
psjudul
psustadz
pstext
mediaid

input->proses->hapus dari memori

unset(variabel) => hapus variabel dari memori
*/

	public function __construct(){
		parent::__construct();
	//load model
	}

	public function tampilpost($data = null){
		// jika null maka fullselect, else ambil idpost
		if ($data===null||$data==null) {
			$q = $this->db->query("select * from cmpost");
		}else{
			$q = $this->db->query("select * from cmpost where postid=?",array($data['postid']));
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function buatpost($data){
		$q = $this->db->query("insert into cmpost (psjudul,psustadz,pstext) values (?,?,?)",
		array($data['psjudul'],
			$data['psustadz'],
			$data['pstext']
		));

		unset($data);
	}

	public function ubahpost($data){
		$q = $this->db->query("update cmpost set psjudul=?,psustadz=?,pstext=? where postid=?",
		array($data['psjudul'],
			$data['psustadz'],
			$data['pstext'],
			$data['postid']
		));

		unset($data);
	}

	public function hapuspost($data){
		$q = $this->db->query("delete from cmpost where postid=?",array($data['postid']));
		unset($data,$q);
	}
}
