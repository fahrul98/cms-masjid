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
		if (isset($data['mode'])) {
			$q = $this->db->query("select * from cmpost where pspublic=1");
		}else if(isset($data['slug'])){
			$q = $this->db->query("select * from cmpost where psjudul=?",array(urldecode($data['slug'])));
		}else{
			$q = $this->db->query("select * from cmpost");
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function tampiltag(){
		$q = $this->db->query("select * from cmtag");
		return $q;
		$q=null;
	}

	public function buatpost($data){
		$q = $this->db->query("insert into cmpost (psjudul,psustadz,pstext,tagid) values (?,?,?,?)",
		array($data['psjudul'],
			$data['psustadz'],
			$data['pstext'],
			$data['tagid']
		));

		unset($data);
	}

	public function ubahpost($data){
		$q = $this->db->query("update cmpost set psjudul=?,psustadz=?,pstext=?,pspublic=?,tagid=? where postid=?",
		array($data['psjudul'],
			$data['psustadz'],
			$data['pstext'],
			$data['pspublic'],
			$data['tagid'],
			$data['postid']
		));

		unset($data);
	}

	public function hapuspost($data){
		$q = $this->db->query("delete from cmpost where postid=?",array($data['postid']));
		unset($data,$q);
	}

	public function publishpost($postid,$data = null) {
		$q = $this->db->query("update cmpost set pspublic=1 where postid=?",array($postid));
		unset($data,$q);
	}

	public function update_counter($postid) {
		$q = $this->db->query("update cmpost set vcount=vcount+1 where postid=?",array($postid));
		unset($data,$q);
	}
}
