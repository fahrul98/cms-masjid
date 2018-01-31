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
		if (isset($data['mode'])&&$data['mode']=='pengunjung') {
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

	function get_search() {
	  $match = $this->input->post('search');
	  $this->db->like('psjudul',$match);
	  $this->db->or_like('pstext',$match);
	   $query = $this->db->get('cmpost');
	  return $query->result();
	}

	public function tampilpaging($jumlah, $batas){
		return $query = $this->db->get('cmpost',$jumlah,$batas)->result();
	}

	public function tampiltag(){
		$q = $this->db->query("select * from cmtag");
		return $q;
		$q=null;
	}

	public function jumlah_data(){		
		$p = $this->db->query("select * from cmpost");
		$q = $p->num_rows();	
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
