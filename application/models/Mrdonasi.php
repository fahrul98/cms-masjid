<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrdonasi extends CI_Model {

/*
isi :
1. Rekam donasi. operasi CRUD
vars:
rdid
rdwaktu
rdjumlah
rddonatur
rdtotal


input->proses->hapus dari memori

unset(variabel) => hapus variabel dari memori
*/

	public function __construct(){
		parent::__construct();
	//load model
	}

	public function tampilrdonasi($data = null){
		// jika null maka fullselect, else ambil idpost
		if ($data===null||$data==null) {
			$q = $this->db->query("select * from cmrdonasi");
		}else{
			$q = $this->db->query("select * from cmrdonasi where rdid=?",array($data['rdid']));
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function tambahrdonasi($data){
		// $q = $this->db->query("insert into cmustadz (usnama,usnotelp,usalamat) values (?,?,?,?)",
		$q = $this->db->query("insert into cmrdonasi (rdwaktu,rdjumlah,rddonatur,rdtotal) values (?,?,?,?)",
		array(
			$data['rdwaktu'],
			$data['rdjumlah'],
			$data['rddonatur'],
			$data['rdtotal']
		));

		unset($data);
	}

	public function ubahrdonasi($data){
		$q = $this->db->query("update cmrdonasi set rdwaktu=?,rdjumlah=?,rddonatur=?,rdtotal=? where rdid=?",
		array(
			// $data['rdid'],
			$data['rdwaktu'],
			$data['rdjumlah'],
			$data['rddonatur'],
			$data['rdtotal'],
			$data['rdid']
		));

		unset($data);
	}

	public function hapusrdonasi($data){
		$q = $this->db->query("delete from cmrdonasi where rdid=?",array($data['rdid']));
		unset($data,$q);
	}
}
