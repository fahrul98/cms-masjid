<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengaturan extends CI_Model {

/*
isi :
1. Pengaturan masjid operasi RU
vars:
dsid
cmdeploy
cmpengunjung
cmfoot1
cmfoot2

input->proses->hapus dari memori

*/

	public function __construct(){
		parent::__construct();
	}

	public function tampilpengaturan(){
		$q = $this->db->query("select * from cmsconfig");

		return $q;
		unset($q);
	}

	public function ubahpengaturan($data){
		$q = $this->db->query("update cmsconfig set
		dsid=?,
		cmfoot1=?,
		cmfoot2=?
		 where dsid=?",
		array(
			$data['dsid2'],
			$data['cmfoot1'],
			$data['cmfoot2'],
			$data['dsid1']
		));

		// redirect(base_url('profiladmin'));
		unset($data);
	}
   //End: method tambahan untuk reset code

}
