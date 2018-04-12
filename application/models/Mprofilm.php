<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofilm extends CI_Model {

/*
isi :
1. Profil masjid. operasi RU (tampil & update)
vars:
pnama
pdeskripsi
psejarah
pvisimisi

input->proses->hapus dari memori

*/

	public function __construct(){
		parent::__construct();
		//load model
	}
	public function tampilprofilm(){
		$q = $this->db->query("select * from cmprofilm");

		return $q;
	}

	public function ubahprofilm($data){
		$q = $this->db->query("update cmprofilm set pnama=?,pdeskripsi=?,psejarah=?,pvisimisi=? where pnama=?",
		array(
			$data['pnama2'],
			$data['pdeskripsi'],
			$data['psejarah'],
			$data['pvisimisi'],
			$data['pnama']
		));

		redirect(base_url('profilm'));
	}

	public function insertprofilm($data){
		$q = $this->db->query("insert into cmprofilm (pnama,pdeskripsi,psejarah,pvisimisi) values (?,?,?,?)",
		array($data['pnama'],
			$data['pdeskripsi'],
			$data['psejarah'],
			$data['pvisimisi']
		));
		unset($data);
	}
}
