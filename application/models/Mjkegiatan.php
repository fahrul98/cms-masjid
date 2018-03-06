<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjkegiatan extends CI_Model {

/*
isi :
1. Mjkegiatan. operasi CRUD
vars:
jkid
jknama
jkpihak
jkwaktu


input->proses->hapus dari memori

$q = $this->db->query("",
	array($data['']
));

*/

	public function __construct(){
		parent::__construct();
	 //load model
	}

	public function tampiljkegiatan($data = null){
		if ($data == null) {
			$q = $this->db->query('select *,cmt.tag from cmjkegiatan cmj left join cmtag cmt on cmj.tagid=cmt.tagid');
		}else{
			$q = $this->db->query('select * from cmjkegiatan where jkid=?',
				array($data['jkid']
			));
		}
		return $q;
	}

	public function buatjkegiatan($data){
		if ($data['tagid']=='') {
			$data['tagid']=2;
		}
		$q = $this->db->query("insert into cmjkegiatan (jknama,jkpihak,jkwaktu,tagid) values (?,?,?,?)",
			array($data['jknama'],
				$data['jkpihak'],
				$data['jkwaktu'],
				$data['tagid']
			));
		unset($data);
	}

	public function ubahjkegiatan($data){
		if ($data['tagid']=='') {
			$data['tagid']=2;
		}
		$q = $this->db->query("update cmjkegiatan set jknama=?,jkpihak=?,jkwaktu=?,tagid=? where jkid=?",
		array($data['jknama'],
			$data['jkpihak'],
			$data['jkwaktu'],
			$data['tagid'],
			$data['jkid']
		));
		unset($data);
	}

	public function hapusjkegiatan($data){
		$q = $this->db->query("delete from cmjkegiatan where jkid=?",array($data['jkid']));
		unset($data);
	}
}
