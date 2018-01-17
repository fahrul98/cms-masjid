<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkmasjid extends CI_Model {

/*
isi :
1. Keuanganmasjid. operasi CRUD
vars:
kmid
kmwaktu
kmketerangan
kmpengeluaran
kmsaldo

input->proses->hapus dari memori

unset(variabel) => hapus variabel dari memori
*/

	public function __construct(){
		parent::__construct();
	//load model
	}

	public function tampilkmasjid($data = null){
		// jika null maka fullselect, else ambil idpost
		if ($data===null||$data==null) {
			$q = $this->db->query("select * from cmkmasjid");
		}else{
			$q = $this->db->query("select * from cmkmasjid where kmid=?",array($data['kmid']));
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function buatkmasjid($data){
		$q = $this->db->query("insert into cmkmasjid (kmwaktu,kmketerangan,kmpengeluaran,kmsaldo) values (?,?,?,?)",
		array($data['kmwaktu'],
			$data['kmketerangan'],
			$data['kmpengeluaran'],
			$data['kmsaldo']
		));

		unset($data);
	}

	public function ubahkmasjid($data){
		$q = $this->db->query("update cmkmasjid set kmwaktu=?,kmketerangan=?,kmpengeluaran=?,kmsaldo=? where kmid=?",
		array($data['kmwaktu'],
			$data['kmketerangan'],
			$data['kmpengeluaran'],
			$data['kmsaldo'],
			$data['kmid']
		));

		unset($data);
	}

	public function hapuskmasjid($data){
		$q = $this->db->query("delete from cmkmasjid where kmid=?",array($data['kmid']));
		unset($data,$q);
	}
}
